<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firebase Push Notifications Example</title>
</head>
<body>
    <h1>Firebase Push Notifications Example</h1>
    <p>If notifications are enabled, you will receive push notifications when new posts are made.</p>

    <script type="module">
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js";
      import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-analytics.js";
      import { getMessaging, getToken, onMessage } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-messaging.js";

      // Your web app's Firebase configuration
      const firebaseConfig = {
        apiKey: "AIzaSyBirAsyVaB96sDpvpNP2vZv7q8xA7kYljo",
        authDomain: "moneytreerealty-f4297.firebaseapp.com",
        projectId: "moneytreerealty-f4297",
        storageBucket: "moneytreerealty-f4297.appspot.com",
        messagingSenderId: "139786880498",
        appId: "1:139786880498:web:ee4cc729a5899e8910576b",
        measurementId: "G-7JSC8QD6VE"
      };

      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      const analytics = getAnalytics(app);
      const messaging = getMessaging(app);

      // Request permission to send notifications
      Notification.requestPermission().then((permission) => {
        if (permission === "granted") {
          console.log("Notification permission granted.");

          // Get the registration token
          getToken(messaging, { vapidKey: "YOUR_PUBLIC_VAPID_KEY" }).then((currentToken) => {
            if (currentToken) {
              console.log('FCM Token:', currentToken);

              // Send the token to the server
              saveTokenToServer(currentToken);
            } else {
              console.log('No registration token available. Request permission to generate one.');
            }
          }).catch((err) => {
            console.log('An error occurred while retrieving token. ', err);
          });
        } else {
          console.log("Unable to get permission to notify.");
        }
      });

      // Send the FCM token to your backend server
      function saveTokenToServer(token) {
        fetch('/save_token.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({ token: token }),
        })
        .then(response => response.json())
        .then(data => {
          console.log('Token saved:', data);
        })
        .catch((error) => {
          console.error('Error saving token:', error);
        });
      }

      // Handle incoming messages when the web app is in the foreground
      onMessage(messaging, (payload) => {
        console.log('Message received. ', payload);
        // Customize notification here
        const notificationTitle = payload.notification.title;
        const notificationOptions = {
          body: payload.notification.body,
          icon: '/firebase-logo.png' // Replace with your app's icon
        };

        new Notification(notificationTitle, notificationOptions);
      });
    </script>
</body>
</html>