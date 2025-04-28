<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - THE TROSS GROUP</title>
  <link rel="stylesheet" href="styles.css"> <!-- Optional external CSS -->
</head>
<body>
  <div class="auth-container">
    <h2>Sign In</h2>
    <form action="confirm.php" method="POST">
      <div class="form-group">
        <label for="email">Email or Username</label>
        <input type="text" id="email" name="email" placeholder="Enter your email or username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn">Sign In</button>
    </form>
    <p>Don't have an account? <a href="signUp.php">Sign Up Here</a></p>
  </div>
</body>
</html>
