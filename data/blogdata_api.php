<?php
// Set response headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Array of files to include
$dataFiles = [
    'blogdata.php' => 'posts',
    'developerslogodata.php' => 'developers',
    'googlereview.php' => 'reviews',
    'jobdata.php' => 'jobs',
    'locationcitydata.php' => 'locations',
    'teammemberdata.php' => 'team',
    'tempdata.php' => 'properties'
];

// Initialize an array to hold all data
$allData = [];

// Include each file and merge its data
foreach ($dataFiles as $file => $variableName) {
    $filePath = __DIR__ . '/' . $file;
    if (file_exists($filePath)) {
        include $filePath;
        // Check if the expected variable exists in the included file
        if (isset($$variableName) && is_array($$variableName)) {
            $allData[$variableName] = $$variableName;
        }
    }
}

// Check for `type` parameter
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    if (isset($allData[$type])) {
        // Handle `id` parameter for filtering specific items
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
        // Return all items for the specified type
        echo json_encode($allData[$type], JSON_PRETTY_PRINT);
        exit;
    } else {
        echo json_encode(['message' => 'Invalid type: ' . $type], JSON_PRETTY_PRINT);
        exit;
    }
}

// Return all data if no specific type is requested
echo json_encode($allData, JSON_PRETTY_PRINT);
?>