<?php

include './connection.php';

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
    exit();
}

// Ensure POST data is available
if (isset($_POST['name'], $_POST['number'], $_POST['message'], $_POST['page_url'])) {
    $name = $_POST['name'];
    $phone = $_POST['number'];
    $message = $_POST['message'];
    $page_url = $_POST['page_url'];


    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO request_callback_form_submissions (name, phone, message, page_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $message, $page_url);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        error_log("Error: " . $stmt->error);
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
} else {
    echo "Required fields are missing";
}

$conn->close();

//  mail logic


$to = "chetan25december@gmail.com";
$sub = "Request Call back form entry";


$msg = "
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<title>Form Submission</title>
<style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
        background: #f9f9f9;
        margin: 0;
        padding: 0;
    }
    .email-container {
        background: #ffffff;
        width: 100%;
        max-width: 600px;
        margin: 40px auto;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .email-header {
        background: #4C9AFF;
        padding: 20px;
        text-align: center;
        color: #ffffff;
    }
    .email-header h1 {
        margin: 0;
        font-size: 24px;
    }
    .email-content {
        padding: 20px;
    }
    .email-content h2 {
        margin-top: 0;
        font-size: 20px;
        font-weight: normal;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }
    .info-row {
        margin-bottom: 15px;
    }
    .info-label {
        font-weight: bold;
        display: inline-block;
        width: 80px;
    }
    .info-value {
        display: inline-block;
        vertical-align: middle;
    }
    .message-section {
        margin-top: 20px;
        background: #f2f2f2;
        padding: 15px;
        border-radius: 4px;
    }
    .message-section p {
        margin: 0;
        line-height: 1.5;
    }
    .footer {
        text-align: center;
        font-size: 12px;
        color: #888;
        padding: 20px;
        border-top: 1px solid #eee;
    }
</style>
</head>
<body>
    <div class='email-container'>
        <div class='email-header'>
            <h1>New Form Submission</h1>
        </div>
        <div class='email-content'>
            <h2>Submitted Details</h2>
            <div class='info-row'>
                <span class='info-label'>Name:</span>
                <span class='info-value'>".htmlspecialchars($name)."</span>
            </div>
            <div class='info-row'>
                <span class='info-label'>Phone:</span>
                <span class='info-value'>".htmlspecialchars($phone)."</span>
            </div>
            <div class='info-row'>
                <span class='info-label'>Page URL:</span>
                <span class='info-value'><a href='".htmlspecialchars($page_url)."' target='_blank'>".htmlspecialchars($page_url)."</a></span>
            </div>

            <div class='message-section'>
                <p><strong>Message:</strong></p>
                <p>".nl2br(htmlspecialchars($message))."</p>
            </div>
        </div>
        <div class='footer'>
            This email was generated automatically. Please do not reply to this email.
        </div>
    </div>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: Your Website <no-reply@yourdomain.com>\r\n";


if (mail($to, $sub, $msg , $headers))
    echo "Your Mail is sent successfully.";
else
    echo "Your Mail is not sent. Try Again.";
?> 