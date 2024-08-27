<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and escape form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['phone']);
    $experience_years = $conn->real_escape_string($_POST['experience_years']);
    $resume = $_FILES['resume']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . uniqid() . '_' . basename($_FILES["resume"]["name"]); // Ensure unique filename
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("pdf", "doc", "docx");

    if (in_array($fileType, $extensions_arr)) {
        if ($_FILES['resume']['size'] > 5242880) { // 5 MB in bytes
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'File too large. File must be less than 5MB.']);
            exit();
        } else {
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
                $query = "INSERT INTO applicants (name, email, mobile, experience_years, resume) VALUES ('$name', '$email', '$mobile', '$experience_years', '$target_file')";
                if ($conn->query($query)) {
                    http_response_code(200);
                    echo json_encode(['success' => true, 'message' => 'Record added successfully.']);
                } else {
                    http_response_code(500);
                    echo json_encode(['success' => false, 'message' => 'Database Error: ' . $conn->error]);
                }
            } else {
                http_response_code(500);
                echo json_encode(['success' => false, 'message' => 'Error in uploading file.']);
            }
        }
    } else {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid file extension.']);
    }
    $conn->close();
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
