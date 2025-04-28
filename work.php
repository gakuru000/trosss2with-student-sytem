<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      transition: all 0.3s ease-in-out;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    .form-group label {
      font-weight: 600;
      margin-bottom: 8px;
      display: block;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
      font-size: 15px;
    }

    .form-group input:focus {
      border-color: #3498db;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }

    .toggle-password {
      position: absolute;
      top: 37px;
      right: 15px;
      cursor: pointer;
      font-size: 14px;
      color: #999;
    }

    .error-message {
      color: red;
      font-size: 13px;
      margin-top: 5px;
      display: none;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      background: #3498db;
      border: none;
      color: white;
      font-weight: bold;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease-in-out;
      text-decoration: none;
    }

    .login-btn:hover {
      background: #2980b9;

      text-decoration:none ;

    }

    @media (max-width: 500px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
  
    <h2>Login</h2>
    <!-- <form id="loginForm" onsubmit="return validateForm()" action="twahirwa.php" method="POST"> -->
       <form action="twahirwa.php" method="post" class="signup-form">
      <div class="form-group">
        <label for="username">username</label>
        <input type="text" id="username"  placeholder="Enter your username" name="username" required />
        
     <form id="loginForm" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required />
        <div class="error-message" id="emailError">Please enter a valid email.</div>
      </div>

      <div class="form-group">
        <label for="password" >password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
        <span class="toggle-password" onclick="togglepassword()">Show</span>
        <div class="error-message" id="passwordError">Password must be at least 6 characters.</div>
      </div>

            </div>
            <button type="submit" class="login-btn"> <a href="twahirwa.php">LOGIN </button></a>
  

  <footer>
    <p>&copy; 2025 MyApp. All rights reserved.</p>
  </footer>
            </body>
</html>

