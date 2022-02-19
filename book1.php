<?php
//Step1
$bookname=$_POST['bookname'];
$Author=$_POST['Author'];
$booklink=$_POST['booklink'];
$category=$_POST['category'];
$conn = new mysqli('localhost','root','','book_store');
if($conn->connect_error)
{
die('Connection Failed: '.$conn->connect_error);
}
else
{
$smt=$conn->prepare("insert into BookDetails(bookname, Author, booklink, category) values(?,?,?,?)");
$smt->bind_param("ssss",$bookname,$Author,$booklink,$category);
$smt->execute();
header("location: Pcatalogue1.php");
$smt->close();
$conn->close();
}
?>