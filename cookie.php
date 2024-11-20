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
        max-width: 350px;
        background-color: #f8f9fa;
        color: #343a40;
        text-align: center;
        padding: 15px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        border-radius: 12px;
        display: none;
        z-index: 1000;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .cookie-consent p {
        margin: 0 0 10px 0;
        padding: 0;
        font-size: 14px;
        line-height: 1.5;
    }

    .cookie-consent button {
        margin: 5px;
        padding: 12px 18px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s ease, opacity 0.3s ease;
    }

    .cookie-consent button.accept {
        background-color: #dc3545;
        color: #fff;
    }

    .cookie-consent button.decline {
        background-color: #28a745; 
     
        color: #fff;
    }

    .cookie-consent button.accept:hover {
        background-color: #c82333;
       
    }

    .cookie-consent button.decline:hover {
        background-color: #218838;
      
    }

    .cookie-icon {
        font-size: 40px;
        margin-bottom: 10px;
        color: #f39c12;
    }
</style>




<div class="cookie-consent" id="cookieConsent">
    <div class="cookie-icon">🍪</div>
    <p>We use cookies to ensure you get the best experience on our website. Do you accept cookies?</p>
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



