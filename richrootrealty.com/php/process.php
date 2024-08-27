<?php

include 'connection.php';

// Ensure POST data is available
if (isset($_POST['name'], $_POST['number'], $_POST['subject'], $_POST['message'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO richroot_contact_form (name, phone, subject, message) VALUES (?, ?, ?, ?)");

    // Check if prepare() was successful
    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        echo "Prepare failed: " . $conn->error;
        exit();
    }

    // Bind parameters
    $stmt->bind_param("ssss", $name, $number, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        error_log("Execute failed: " . $stmt->error);
        echo "Execute failed: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
} else {
    echo "Required fields are missing";
}

$conn->close();
