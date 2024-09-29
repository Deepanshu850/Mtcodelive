<?php
header('Content-Type: application/json'); // Set the content type to JSON
include 'connection.php';

$response = array(); // Initialize response array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and escape form data to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $experience_years = $conn->real_escape_string($_POST['experience_years']);

    // Handle file upload
    $resume = $_FILES['resume']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($resume);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed file extensions and size limit
    $extensions_arr = array("pdf", "doc", "docx");
    $maxFileSize = 5242880; // 5MB in bytes

    // Check file extension and size
    if (in_array($fileType, $extensions_arr)) {
        if ($_FILES['resume']['size'] > $maxFileSize) {
            $response['status'] = 'error';
            $response['message'] = 'File too large. File must be less than 5MB.';
        } else {
            // Attempt to move uploaded file to the target directory
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
                // Prepare the SQL query to insert the form data into the database
                $query = "INSERT INTO applicants (name, email, mobile, experience_years, resume) 
                          VALUES ('$name', '$email', '$mobile', '$experience_years', '$resume')";

                // Execute the query and check for success
                if ($conn->query($query)) {
                    $response['status'] = 'success';
                    $response['message'] = 'Record added successfully.';
                } else {
                    // Capture database error and display it
                    $response['status'] = 'error';
                    $response['message'] = 'Database Error: ' . $conn->error;
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Error in uploading file.';
            }
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Invalid file extension. Allowed types: pdf, doc, docx.';
    }

    // Close the database connection
    $conn->close();

    // Return JSON response
    echo json_encode($response);
}
