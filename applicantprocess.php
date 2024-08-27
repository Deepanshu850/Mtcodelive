<?php
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and escape form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $experience_years = $conn->real_escape_string($_POST['experience_years']);
    $resume = $_FILES['resume']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["resume"]["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("pdf", "doc", "docx");

    if (in_array($fileType, $extensions_arr)) {
        if ($_FILES['resume']['size'] > 5242880) { // 5 MB in bytes
            $message = "File too large. File must be less than 5MB.";
            $alertType = "error";
        } else {
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
                $query = "INSERT INTO applicants (name, email, mobile, experience_years, resume) VALUES ('$name', '$email', '$mobile', '$experience_years', '$resume')";
                if ($conn->query($query)) {
                    $message = "Record added successfully.";
                    $alertType = "success";
                } else {
                    $message = "Database Error: " . $conn->error;
                    $alertType = "error";
                }
            } else {
                $message = "Error in uploading file.";
                $alertType = "error";
            }
        }
    } else {
        $message = "Invalid file extension.";
        $alertType = "error";
    }
    $conn->close();

    // Output JavaScript to handle redirection and alert display
    echo "<script type='text/javascript'>
            alert('" . $message . "');
            window.location.href = 'career.php';
          </script>";
}
?>
