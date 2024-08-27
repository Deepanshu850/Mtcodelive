<?php
// Include the database connection file
include 'db_connect.php';

// Your PHP code that uses the $conn connection object
// Example: Inserting data into a table
$name = $conn->real_escape_string($_POST['name']);
$number = $conn->real_escape_string($_POST['number']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO contact (name, number, subject, message) VALUES ('$name', '$number', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection when done
$conn->close();
?>
