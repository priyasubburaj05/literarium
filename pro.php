<?php
//Step1
$pro=$_POST['ProjectName'];
$des=$_POST['Des'];
$mot=$_POST['Moto'];
$mem=$_POST['member'];
$led=$_POST['Leader'];
$cat=$_POST['category'];
$conn = new mysqli('localhost','root','','book_store');
if($conn->connect_error)
{
die('Connection Failed: '.$conn->connect_error);
}
else
{
$smt=$conn->prepare("insert into projectdetails(ProjectName, Description, Moto, Members, Leader,Category) values(?,?,?,?,?,?)");
$smt->bind_param("sssiss",$pro,$des,$mot,$mem,$led,$cat);
$smt->execute();
echo "Project Added successfully.....";
$smt->close();
$conn->close();
}
?>