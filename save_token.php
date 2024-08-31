<?php
$servername = "localhost";
$username = "root"; // default username for local MySQL
$password = ""; // default password for local MySQL, usually empty
$dbname = "pushnoti"; // the database name you just created

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON data sent from the frontend
$data = json_decode(file_get_contents("php://input"), true);
$token = $data['token'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO fcm_tokens (token) VALUES (?)");
$stmt->bind_param("s", $token);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Token saved"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to save token"]);
}

$stmt->close();
$conn->close();
?>
