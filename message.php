<?php
// Include PHPMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'connection.php'; // Your updated database connection file

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST["name"]);
    $phone = clean_input($_POST["phone"]);
    $email = clean_input($_POST["email"]);
    $subject = clean_input($_POST["subject"]);
    $message = clean_input($_POST["message"]);

    if (empty($name) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required!";
        return; // Stop execution if validation fails
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings from environment variables or configuration
        $mail->isSMTP();
        $mail->Host = getenv('MAIL_HOST'); // e.g., smtp.gmail.com
        $mail->SMTPAuth = true;
        $mail->Username = getenv('MAIL_USERNAME'); // Your email address
        $mail->Password = getenv('MAIL_PASSWORD'); // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Adjust as needed
        $mail->Port = 465;

        // Recipients
        $mail->setFrom($mail->Username, 'Website');
        $mail->addAddress($mail->Username, 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<p>Name: $name</p><p>Phone: $phone</p><p>Email: $email</p><p>Message: $message</p>";

        // Insert data into the database using prepared statement
        $stmt = $conn->prepare("INSERT INTO contact (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);

        if ($stmt->execute()) {
            $mail->send();
            echo '<script> alert("Message sent successfully"); window.location.href = "index.php"; </script>';
        } else {
            echo "Error occurred: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}