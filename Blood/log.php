<?php
session_start();
include "conn.php";
if(isset($_POST['sub']))
    $user=$_POST['uname'];
    $password=$_POST['psw'];
$sql="SELECT * FROM info_table WHERE email='$user' and password='$password'";
$result=$mysqli->query($sql) or die("Error occured ".$sql);
if($result->num_rows>0) {
    
    $_SESSION['uname']=$uname;
    header('Location:home1.php');
    
}
else{
    echo "<p>INVALID CREDENTIALS</p>";
}
$mysqli->close();
?>  