 <?PHP 
   $host = '127.0.0.1'; 
   $db = 'regist'; 
   $user = 'root'; // Replace with your MySQL username 
   $pass = ''; // Replace with your MySQL password 
   // Create a connection 
   $conn = new mysqli($host, $user, $pass, $db); 
 
   // Check the connection 
   if ($conn->connect_error) { 
       die("Connection failed: " . $conn->connect_error); 
   } 
    else{
   	echo '';
   }
   $FirstName=$_POST['FirstName'];
   $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $PhoneNumber=$_POST['PhoneNumber'];
   $BirthDate=$_POST['BirthDate'];
    $Gender=$_POST['Gender'];
     $address=$_POST['Address'];
      
      
        $country=$_POST['country'];
        
          $StudentId=$_POST['StudentId'];
           $password=$_POST['password'];
   $sql="insert into infor(FirstName,LastName,Email, PhoneNumber,BirthDate,Gender,Address, Country,StudentId,Password)values('$FirstName','$LastName','$Email','$PhoneNumber','$BirthDate','$Gender','$address','$country','$StudentId','$password')";

   echo '<h1>the information is recorded well in the database </H1>';

      

   mysqli_query($conn,$sql);
   ?>

    <div class="submit-container">
        <h2>Registration Successful!</h2>
        <p>Thank you for registering. Your details have been successfully submitted.</p>
        <p>If you have any questions, feel free to contact us.</p>
        <a href="registration.php" class="back-button">Register Another Student</a>
    </div>

