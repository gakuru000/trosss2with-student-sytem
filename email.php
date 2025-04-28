<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Email Confirmation</title>
  <link rel="stylesheet" href="email.css" />
</head>
<body>
  <div class="confirmation-container">
    <h2>Email Confirmation</h2>
    <p>
      A confirmation email has been sent to your registered email address.<br></br>
      Please check your inbox (and spam folder) and click the link in the email to verify your account.
    </p>
    <p>
      If you have received a confirmation code, you can also enter it below.<br><br>
    </p>

    <form action="confirm_email.php" method="POST">
      <div class="form-group">
        <label for="confirmation_code">Confirmation Code</label>
        <input
          type="text"
          id="confirmation_code"
          name="confirmation_code"
          placeholder="Enter your confirmation code"
        />
      </div>
      <button type="submit" class="confirm-button">Confirm Email</button>
    </form>

    <p>
      Didn't receive an email? <a href="resend_confirmation.php">Resend Email</a>
    </p>
  </div>
</body>
</html>
