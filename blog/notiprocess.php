<?php
// Database configuration
$servername = "localhost";
$username = "moneytree";
$password = "Dgpampgt@1";
$database = "i9754857_brgn1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$query = $_POST['query'];
$message = $_POST['message'];
$consent = isset($_POST['consent']) ? 1 : 0;

$sql = "INSERT INTO property_requests (name, phone_number, query, message, consent) VALUES ('$name', '$phoneNumber', '$query', '$message', '$consent')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
