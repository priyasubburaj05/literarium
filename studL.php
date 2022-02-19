<?php
$con=new mysqli('localhost','root','','book_store');
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($con,$_POST['psw']); 
      
      $sql = "SELECT * FROM studdetails WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: Scatalogue.php");
         //header("location: welcome.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>