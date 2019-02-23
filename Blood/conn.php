<?php
$host="localhost";
$user="root";
$password="password";
$db="blood_database";

$mysqli = new mysqli($host,$user,$password,$db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>