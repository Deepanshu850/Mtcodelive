<?php
// Include your connection file
include 'connection.php';

// Initialize an array to store any potential errors
$errors = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validation
    if (!$name) $errors[] = "Name is required.";
    if (!$email) $errors[] = "Valid email is required.";
    if (!$phone) $errors[] = "Phone number is required.";
    if (!$message) $errors[] = "Message is required.";

    // If there are no errors, proceed with inserting into the database
    if (count($errors) === 0) {
        $sql = "INSERT INTO inquiries (name, email, phone, message) VALUES (?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $name, $email, $phone, $message);

            if ($stmt->execute()) {
                echo '<script>window.location.href = "index.php"; </script>';
                // Redirect or inform of success as needed
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        // Handle errors appropriately
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
    
    $conn->close();
}
?>