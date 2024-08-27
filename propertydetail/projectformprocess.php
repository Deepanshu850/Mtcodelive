<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate phone number (basic validation, checks if it is numeric and 10 digits long)
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        http_response_code(400);
        echo json_encode(['message' => 'Invalid phone number.']);
        exit;
    }

    // Database connection
    $servername = "localhost";
    $username = "moneytree";
    $password = "Dgpampgt@1";
    $database = "i9754857_brgn1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(['message' => 'Database connection failed: ' . $conn->connect_error]);
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO project_page_inquiry (name, phone, subject, message) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        http_response_code(500);
        echo json_encode(['message' => 'Prepare statement failed: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param("ssss", $name, $phone, $subject, $message);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        http_response_code(200);
        echo json_encode(['message' => 'Message sent successfully.']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Execute statement failed: ' . $stmt->error]);
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
