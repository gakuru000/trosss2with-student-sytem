s<?php
// view_data.php

// Database connection parameters
$servername = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "student";

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the record ID is provided via GET
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid or missing record ID.");
}

$id = $_GET['id'];

// Prepare a statement to fetch the user record from the "sign" table.
// Make sure your table columns names match those used below.
$sql = "SELECT * FROM sign WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("No record found with this ID.");
}

$row = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Review Registration Details</title>
  <link rel="stylesheet" href="information.css">
</head>
<body>
  <div class="container">
    <h2>Review Your Registration Details</h2>
    <form>
      <!-- Display First Name -->
      <div class="form-group">
        <label for="FirstName">First Name</label>
        <input type="text" id="FirstName" name="FirstName" value="<?php echo htmlspecialchars($row['FirstName'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Last Name -->
      <div class="form-group">
        <label for="LastName">Last Name</label>
        <input type="text" id="LastName" name="LastName" value="<?php echo htmlspecialchars($row['LastName'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Email -->
      <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" id="Email" name="Email" value="<?php echo htmlspecialchars($row['Email'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Phone Number -->
      <div class="form-group">
        <label for="PhoneNumber">Phone Number</label>
        <input type="tel" id="PhoneNumber" name="PhoneNumber" value="<?php echo htmlspecialchars($row['PhoneNumber'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Birth Date -->
      <div class="form-group">
        <label for="BirthDate">Birth Date</label>
        <input type="date" id="BirthDate" name="BirthDate" value="<?php echo htmlspecialchars($row['BirthDate'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Gender -->
      <div class="form-group">
        <label for="Gender">Gender</label>
        <input type="text" id="Gender" name="Gender" value="<?php echo htmlspecialchars($row['Gender'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Address -->
      <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" id="Address" name="Address" value="<?php echo htmlspecialchars($row['Address'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Country -->
      <div class="form-group">
        <label for="country">Country</label>
        <input type="text" id="country" name="country" value="<?php echo htmlspecialchars($row['country'] ?? ''); ?>" readonly>
      </div>

      <!-- Display Student ID -->
      <div class="form-group">
        <label for="StudentId">Student ID</label>
        <input type="text" id="StudentId" name="StudentId" value="<?php echo htmlspecialchars($row['StudentId'] ?? ''); ?>" readonly>
      </div>

      <!-- We do not display the password for security reasons -->
      
      <div class="action-buttons">
        <!-- Link to the edit page, passing the record ID -->
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn modify-btn">Modify Data</a>
      </div>
    </form>
  </div>
</body>
</html>
