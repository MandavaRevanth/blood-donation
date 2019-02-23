<?php
include "fd.php";
$exp=$_POST["experience"];
$comment=$_POST["comments"];
$name=$_POST["name"];
$email=$_POST["email"];


$sql="INSERT INTO fb(experience,comment,name,email) VALUES ('$exp','$comment','$name','$email')";
$result=$mysqli->query($sql) or die("Error error ocured try again");
echo"Thanks For your valuable feed back";
header('Location:home1.php');
$mysqli->close();
?>