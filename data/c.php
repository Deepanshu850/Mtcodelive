<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = trim($_POST['name'] ?? '');
    $phone_number = trim($_POST['phone_number'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate the input fields
    if (empty($name) || empty($phone_number) || empty($subject) || empty($message)) {
        echo "All fields are required!";
        exit;
    }

    if (!preg_match('/^\d{10}$/', $phone_number)) {
        echo "Invalid phone number. Please enter a valid 10-digit number.";
        exit;
    }

    // API endpoint
    $url = 'https://moneytreerealty.com/data/api.php';

    // Data to send in JSON format
    $data = [
        'name' => $name,
        'phone_number' => $phone_number,
        'subject' => $subject,
        'message' => $message,
    ];

    // API key
    $apiKey = '8565bae9-44c2-4502-a895-dc70a7e24bc1';

    // Initialize cURL
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'X-API-KEY: ' . $apiKey,
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute the cURL request and get the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo "cURL error: " . curl_error($ch);
    } else {
        // Decode and display the API response
        $responseData = json_decode($response, true);
        if (isset($responseData['message'])) {
            echo $responseData['message'];
        } else {
            echo "Unexpected response: " . $response;
        }
    }

    // Close the cURL session
    curl_close($ch);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .form-container h2 {
            margin: 0 0 15px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
        }

        .form-container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 600;
            color: #555;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        .form-container input:focus,
        .form-container textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-container textarea {
            resize: none;
            height: 100px;
        }

        .form-container button {
            width: 100%;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .form-container small {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contact Us</h2>
        <form action="c.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your 10-digit phone number" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Enter your message" required></textarea>

            <button type="submit">Submit</button>
            <small>We will respond within 24 hours.</small>
        </form>
    </div>
</body>
</html>