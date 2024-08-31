importScripts('https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/10.13.1/firebase-messaging.js');

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
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.onBackgroundMessage(function (payload) {
    console.log('Received background message ', payload);

    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        body: payload.notification.body,
        icon: '/firebase-logo.png' // Replace with your app's icon
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});
