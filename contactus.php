<?php
//Step1
$firstname=$_POST['firstname'];
$Lastname=$_POST['lastname'];
$Country=$_POST['Country'];
$Content=$_POST['subject'];
$conn = new mysqli('localhost','root','','book_store');
if($conn->connect_error)
{
die('Connection Failed: '.$conn->connect_error);
}
else
{
$smt=$conn->prepare("insert into contactus(FirstName, LastName, Country, Subject) values(?,?,?,?)");
$smt->bind_param("ssss",$firstname,$Lastname,$Country,$Content);
$smt->execute();
echo "Your report has been SUCCESSFULLY noted.......";
$smt->close();
$conn->close();
}
?>