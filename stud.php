<?php
//Step1
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phnumber=$_POST['phno'];
$email=$_POST['email'];
$Password=$_POST['psw'];
$conn = new mysqli('localhost','root','','book_store');
if($conn->connect_error)
{
die('Connection Failed: '.$conn->connect_error);
}
else
{
$smt=$conn->prepare("insert into StudDetails(FirstName, LastName, PhoneNo, Email, Password) values(?,?,?,?,?)");
$smt->bind_param("ssiss",$firstname,$lastname,$phnumber,$email,$Password);
$smt->execute();
header("location: SSignUpsuc.php");
$smt->close();
$conn->close();
}
?>