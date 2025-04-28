 <?PHP 
   $host = '127.0.0.1'; 
   $db = 'login'; 
   $user = 'root'; // Replace with your MySQL username 
   $pass = ''; // Replace with your MySQL password 
   // Create a connection 
   $conn = new mysqli($host, $user, $pass, $db); 
 
   // Check the connection 
   if ($conn->connect_error) { 
       die("Connection failed: " . $conn->connect_error); 
   } 
   else{
   	echo 'successfully connected to database';
   }
   // $sname=$_POST['sname'];
   // $class=$_POST['class'];
   // $sql="insert into students(name,class)values('$sname','$class')";
   // echo "<h1>AMAKURU YABITSWE NEZA<H1>";
   // mysqli_query($conn,$sql);
   // ?>