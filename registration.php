<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="information.css">

</head>
<body>
    <div class="registration-container">
        <form class="registration-form" action="gakuru.php" method="POST">
            <h2>Student Registration Form</h2>

            <!-- Column 1: First Name -->
            <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" id="FirstName" name="FirstName" >
            </div>

            <!-- Column 2: Last Name -->
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text"  name="LastName" >
            </div>

            <!-- Column 3: Email -->
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email" >
            </div>

            <!-- Column 4: Phone Number -->
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="PhoneNumber" >
            </div>

            <!-- Column 5: Date of Birth -->
            <div class="form-group">
            <label for="BirthDate"> BirthDate</label>
                <input type="date" id="birthDate" name="BirthDate">
            </div>

            <!-- Column 6: Gender -->
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="Gender" >
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Column 7: Address -->
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="Address" name="Address" required>
          


            <!-- Column 10: Country -->
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>
         
            <!-- Column 12: Student ID -->
            <div class="form-group">
                <label for="studentId">Student ID</label>
                <input type="text" id="studentId" name="StudentId" required>
            </div>

            <!-- Column 13: Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="register-button"><a href="gakuru.php">Register </button></a>
            

        </form>
    </div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

</body>
</html>