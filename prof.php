<?php
//Step1
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$PhoneNo=$_POST['PhNo'];
$CabNo=$_POST['CaNo'];
$Email=$_POST['email'];
$Password=$_POST['psw'];
$rpas=$_POST['psw-repeat'];
$conn = new mysqli('localhost','root','','book_store');
if($conn->connect_error)
{
die('Connection Failed: '.$conn->connect_error);
}
else
{
$smt=$conn->prepare("insert into profdetail(FirstName,LastName,PhoneNo,CabinNo,Email,Password) values(?,?,?,?,?,?)");
$smt->bind_param("ssiiss",$firstname,$lastname,$PhoneNo,$CabNo,$Email,$Password);
$smt->execute();
sleep(2);
header("location: profsuc.php");
$smt->close();
$conn->close();
}
?>