<?php
// track_click.php

// Database configuration using MySQLi
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the 'id' from POST data
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id > 0) {
    // Prepare SQL statement to insert or update the click count
    $stmt = $conn->prepare("
        INSERT INTO click_counter (id, count) VALUES (?, 1)
        ON DUPLICATE KEY UPDATE count = count + 1
    ");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("i", $id);

        // Execute the statement
        if ($stmt->execute()) {
            // Send a success response
            echo 'success';
        } else {
            // Error executing the statement
            http_response_code(500);
            echo 'Error executing statement: ' . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error preparing the statement
        http_response_code(500);
        echo 'Error preparing statement: ' . $conn->error;
    }
} else {
    // Invalid 'id' provided
    http_response_code(400);
    echo 'Invalid ID';
}

// Close the connection
$conn->close();
 