<?php
// Check if the user has given consent
if (isset($_COOKIE['user_consent']) && $_COOKIE['user_consent'] == 'accepted') {
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>


<style>
    .cookie-consent {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 400px;
        background-color: #fff;
        color: #2c3e50;
        text-align: center;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        display: none;
        z-index: 1000;
    }

    .cookie-consent p {
        margin: 0 0 15px 0;
        padding: 0;
        font-size: 16px;
    }

    .cookie-consent button {
        margin: 5px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
    }

    .cookie-consent button.accept {
        background-color: #27ae60;
        color: #fff;
    }

    .cookie-consent button.decline {
        background-color: #c0392b;
        color: #fff;
    }

    .cookie-consent button:hover {
        opacity: 0.8;
    }

    .cookie-icon {
        font-size: 50px;
    }
</style>

<div class="cookie-consent" id="cookieConsent">
    <div class="cookie-icon">🍪</div>
    <p>We use cookies to improve your experience on our site. Do you accept the use of cookies?</p>
    <button class="accept" onclick="acceptCookies()">Accept</button>
    <button class="decline" onclick="declineCookies()">Decline</button>
</div>

<script>
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function acceptCookies() {
        setCookie("user_consent", "accepted", 30); // 30 days
        setCookie("user", "John Doe", 30); // Set user cookie for 30 days
        document.getElementById('cookieConsent').style.display = 'none';
        location.reload(); // Reload the page to apply the consent
    }

    function declineCookies() {
        setCookie("user_consent", "declined", 30); // 30 days
        document.getElementById('cookieConsent').style.display = 'none';
    }

    window.onload = function() {
        if (getCookie('user_consent') === null) {
            document.getElementById('cookieConsent').style.display = 'block';
        }
    }
</script>