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
    $userMessage = $_POST['message'];
    $page_url = $_POST['page_url'];

    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO request_callback_form_submissions (name, phone, message, page_url) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $phone, $userMessage, $page_url);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        error_log("Error: " . $stmt->error);
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Required fields are missing";
}

$conn->close();












$currentDateTime = date('Y-m-d H:i:s');

try {
    //Recipients
    $mail->setFrom('jakereaper74@gmail.com', 'Chet@MTR');
    $mail->addAddress('chetan25december@gmail.com', 'Test User');

    // mail body
    $mail->isHTML(true);
    $mail->Subject = 'New Callback Request Received';

    $mail->Body = "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Email</title>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .header { background: #4C9AFF; padding: 20px; text-align: center; color: #ffffff; }
        .header h1 { margin: 0; font-size: 24px; }
        .content { padding: 20px; }
        .content p { margin: 10px 0; }
        .info-label { font-weight: bold; }
        .footer { text-align: center; font-size: 12px; color: #888; padding: 20px; }
    </style>
    </head>
    <body>
        <div class=\"header\">
            <h1>New Callback Request</h1>
        </div>
        <div class=\"content\">
            <p><span class=\"info-label\">Name:</span> " . htmlspecialchars($name) . "</p>
            <p><span class=\"info-label\">Phone:</span> " . htmlspecialchars($phone) . "</p>
            <p><span class=\"info-label\">Message:</span><br>" . nl2br(htmlspecialchars($userMessage)) . "</p>
            <p><span class=\"info-label\">Page URL:</span> <a href=\"" . htmlspecialchars($page_url) . "\" target=\"_blank\">" . htmlspecialchars($page_url) . "</a></p>
            <p><span class=\"info-label\">Submitted At:</span> " . $currentDateTime . "</p>
        </div>
        <div class=\"footer\">
            &copy; " . date('Y') . " Your Company. All rights reserved.
        </div>
    </body>
    </html>
    ";

    $mail->AltBody = "Name: $name\nPhone: $phone\nMessage: $userMessage\nPage URL: $page_url\nTime: $currentDateTime";

    $mail->send();
    echo 'Message has been sent with the input data.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
