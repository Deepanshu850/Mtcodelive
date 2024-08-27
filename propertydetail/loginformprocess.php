<?php
session_start();
 
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php'; // Make sure to include your database connection file here

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare a select statement to fetch the hashed password from the database
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    
    // Bind the result to the $hashed_password variable
    $stmt->bind_result($hashed_password);
    $stmt->fetch(); // Fetch the value into the $hashed_password variable
    $stmt->close();

    // Now $hashed_password should contain the hashed password if the user was found
    if ($hashed_password && password_verify($password, $hashed_password)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        // Redirect to entry form page
        header("Location: entryform.php");
        exit; // Prevent further execution
    } else {
        // Handle login failure
        echo "Invalid username or password."; // Placeholder error handling
    }

    $conn->close();
}
?>