<?php

include 'connection.php'; 

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
    exit();
}

// Ensure POST data is available
if (isset($_POST['name'], $_POST['phone'], $_POST['message'], $_POST['page_url'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $page_url = $_POST['page_url'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO real_estate_page_inquiry (name, phone, message, page_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $message, $page_url);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        error_log("Error: " . $stmt->error);
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
} else {
    echo "Required fields are missing";
}

$conn->close();
