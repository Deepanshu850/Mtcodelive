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
?>
<!--  Optional: Set the character set to utf8
 $conn->set_charset("utf8");

 You can include this file in other PHP files where you need database connection. -->