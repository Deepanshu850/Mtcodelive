<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <title>Login - MoneyTree Realty</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        /* Slightly larger for better readability */
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 15px;
        /* Increased padding for larger touch targets */
        border: 1px solid #cccccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
        /* Improved visibility on small screens */
    }

    button[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 15px 20px;
        /* Increased padding for a larger touch target */
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        /* More visible and easier to tap */
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .form-container {
            width: 90%;
            /* Slightly more padding on smaller screens */
        }
    }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="logo-section" style="background-color: #005b52; text-align:center; margin-bottom:20px;">
            <img src="./assets/img/logo.png" alt="Company Logo" style="max-width:100px;">
        </div>
        <h2>Login</h2>
        <form action="loginformprocess.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>