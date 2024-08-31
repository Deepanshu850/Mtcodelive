<?php

function sendPushNotification($title, $body) {
    $url = 'https://fcm.googleapis.com/fcm/send';
    $serverKey = 'YOUR_SERVER_KEY'; // Replace with your Firebase server key

    // Fetch all tokens from the database
    $conn = new mysqli('localhost', 'root', '', 'pushnoti');
    $result = $conn->query("SELECT token FROM fcm_tokens");
    $tokens = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tokens[] = $row['token'];
        }
    }

    $conn->close();

    $data = [
        "registration_ids" => $tokens, // array of FCM tokens
        "notification" => [
            "title" => $title,
            "body" => $body,
            "sound" => "default"
        ]
    ];

    $headers = [
        'Authorization: key=' . $serverKey,
        'Content-Type: application/json'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }

    curl_close($ch);
    return $result;
}

// Example usage when a new post is published
$title = "New Post Published!";
$body = "Check out the latest post on our website.";

$response = sendPushNotification($title, $body);
echo $response;

?>
