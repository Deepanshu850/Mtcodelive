<?php
 
include "db.php"; // Make sure this includes your database connection details

// Collect and sanitize input
$username = $conn->real_escape_string(trim($_POST['username']));
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirmPassword) {
echo "Passwords do not match.";
exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if the username already exists
$checkUser = $conn->prepare("SELECT * FROM users WHERE username=?");
// Corrected the parameter binding here from "ss" to "s"
$checkUser->bind_param("s", $username);
$checkUser->execute();
$result = $checkUser->get_result();

if ($result->num_rows > 0) {
echo "Username already exists.";
} else {
// Insert new user into database
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
// Also corrected the parameter binding here from "sss" to "ss"
$stmt->bind_param("ss", $username, $hashedPassword);

if ($stmt->execute()) {
// Redirect to loginform.php after successful registration
header('Location: loginform.php');
exit; // Make sure no further code is executed after the redirect

} else {
echo "Error: " . $stmt->error;
}
$stmt->close();
}

$conn->close();
?>