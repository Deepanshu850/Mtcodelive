<?php
// Set response headers for open CORS
header('Access-Control-Allow-Origin: *'); // Allow requests from any origin
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-API-KEY');
header('Content-Type: application/json');

// Handle preflight (OPTIONS) requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, X-API-KEY');
    http_response_code(204); // No Content
    exit;
}

// Define a valid API key
$validApiKey = '8565bae9-44c2-4502-a895-dc70a7e24bc1';

// Check for the API key in the request headers
$headers = getallheaders();
$apiKey = $headers['X-API-KEY'] ?? $headers['x-api-key'] ?? null;
if ($apiKey !== $validApiKey) {
    http_response_code(403); // Forbidden
    echo json_encode(['message' => 'Forbidden: Invalid or missing API key']);
    exit;
}

// Database connection details
$host = 'localhost';
$db = 'mt';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['message' => 'Database connection failed', 'error' => $e->getMessage()]);
    exit;
}

// Handle POST requests for contact form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents('php://input'), true);

    // Validate required fields
    if (
        isset($postData['name'], $postData['phone_number'], $postData['subject'], $postData['message']) &&
        !empty(trim($postData['name'])) &&
        !empty(trim($postData['phone_number'])) &&
        !empty(trim($postData['subject'])) &&
        !empty(trim($postData['message']))
    ) {
        // Validate phone number
        if (!preg_match('/^\d{10}$/', $postData['phone_number'])) {
            http_response_code(400); // Bad Request
            echo json_encode(['message' => 'Invalid phone number. Please enter a valid 10-digit number.']);
            exit;
        }

        $sql = "INSERT INTO contact_form_submissions (name, phone_number, subject, message, submitted_at)
                VALUES (:name, :phone_number, :subject, :message, NOW())";

        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':name' => trim($postData['name']),
                ':phone_number' => trim($postData['phone_number']),
                ':subject' => trim($postData['subject']),
                ':message' => trim($postData['message'])
            ]);
            echo json_encode(['message' => 'Form submitted successfully!']);
        } catch (PDOException $e) {
            http_response_code(500); // Internal Server Error
            echo json_encode(['message' => 'Failed to save data', 'error' => $e->getMessage()]);
        }
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(['message' => 'All fields are required.']);
    }
    exit;
}

// Handle GET requests
$dataFiles = [
    'blogdata.php' => 'posts',
    'developerslogodata.php' => 'developerLogos',
    'googlereview.php' => 'reviews',
    'jobdata.php' => 'jobs',
    'locationcitydata.php' => 'locations',
    'teammemberdata.php' => 'teamMembers',
    'tempdata.php' => 'properties'
];

// Initialize an array to hold all data
$allData = [];

// Include each file and merge its data
foreach ($dataFiles as $file => $variableName) {
    $filePath = __DIR__ . '/' . $file;
    if (file_exists($filePath)) {
        include $filePath;
        if (isset($$variableName) && is_array($$variableName)) {
            $allData[$variableName] = $$variableName;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['type'])) {
    $type = $_GET['type'];
    if (isset($allData[$type])) {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $filteredData = array_filter($allData[$type], function ($item) use ($id) {
                return isset($item['id']) && $item['id'] === $id;
            });
            if (!empty($filteredData)) {
                echo json_encode(array_values($filteredData)[0], JSON_PRETTY_PRINT);
                exit;
            } else {
                echo json_encode(['message' => ucfirst($type) . ' item not found'], JSON_PRETTY_PRINT);
                exit;
            }
        }
        echo json_encode($allData[$type], JSON_PRETTY_PRINT);
        exit;
    } else {
        echo json_encode(['message' => 'Invalid type: ' . $type], JSON_PRETTY_PRINT);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($allData, JSON_PRETTY_PRINT);
} else {
    http_response_code(404); // Not Found
    echo json_encode(['message' => 'Endpoint not found']);
}