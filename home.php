<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - THE TROSS GROUP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="dashboard-container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>You have successfully logged in.</p>
    <!-- Additional dashboard content can go here -->
  </div>
</body>
</html>
