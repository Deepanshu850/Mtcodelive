<?php
include 'connection.php';  // Include the database connection file

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO submissions (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);

// Set parameters from POST data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Execute the statement
$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();

// Redirect to index.php after submission
header("Location: index.php");
exit;
?>
