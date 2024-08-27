 <!DOCTYPE html>
 <html>

 <head>
     <title>MoneyTree Realty Account Creation</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
     <style>
     body {
         font-family: Arial, sans-serif;
         padding: 20px;
         background-color: #f4f4f4;
     }

     .form-container {
         background-color: #ffffff;
         max-width: 600px;
         margin: auto;
         padding: 20px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     .logo-section {
         background-color: #005b52;
         text-align: center;
         margin-bottom: 20px;
         padding: 10px;
     }

     .logo-section img {
         max-width: 100px;
     }

     .form-group {
         margin-bottom: 15px;
     }

     .form-group label {
         display: block;
         margin-bottom: 5px;
     }

     .form-group input[type="text"],
     .form-group input[type="password"] {
         width: 100%;
         padding: 10px;
         margin: 0;
         box-sizing: border-box;
         border: 1px solid #ccc;
         border-radius: 4px;
     }

     button[type="submit"] {
         background-color: #4CAF50;
         color: white;
         padding: 15px 20px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         width: 100%;
     }

     button[type="submit"]:hover {
         background-color: #45a049;
     }
     </style>
 </head>

 <body>
     <div class="form-container">
         <div class="logo-section">
             <img src="./assets/img/logo.png" alt="Company Logo">
         </div>
         <h2>Create Account</h2>
         <form action="createuserprocess.php" method="post">
             <div class="form-group">
                 <label for="username">Username:</label>
                 <input type="text" id="username" name="username" required>
             </div>
             <div class="form-group">
                 <label for="password">Password:</label>
                 <input type="password" id="password" name="password" required>
             </div>
             <div class="form-group">
                 <label for="confirm_password">Confirm Password:</label>
                 <input type="password" id="confirm_password" name="confirm_password" required>
             </div>
             <button type="submit">Create Account</button>
         </form>
     </div>
 </body>

 </html>