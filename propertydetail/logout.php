<?php
session_start();

// Unset all session values 
$_SESSION = array();

// Destroy session 
session_destroy();

header("Location: loginform.php"); // Redirect to login page
exit;
?>