<?php
include "conn.php";
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$dob=$_POST["dob"];
$blg=$_POST["bg"];
$mob=$_POST["mn"];
$state=$_POST["state"];
$dist=$_POST["dist"];
$city=$_POST["city"];
//$address=$_POST["add"];
$ema=$_POST["email"];
$pass=$_POST["pass"];



$sql="INSERT INTO info_table (first_name,last_name,d_o_b,bg_grp,mobile_no,state,district,city,email,password) VALUES ('$fname','$lname','$dob','$blg','$mob','$state','$dist','$city','$ema','$pass')";
$result=$mysqli->query($sql) or die("Error error ocured try again");
echo "Sucessfully Registered now click the below link to LOGIN ";


?>
<h2><a href="login.php">LOGIN</a></h2>