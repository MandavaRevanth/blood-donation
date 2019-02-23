<?php
include "com.php";
$sql = "SELECT first_name, last_name,d_o_b FROM info_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["first_name"]. " " . $row["last_name"]. " ".$row["d_o_b"]."<br>";
    }
} else {
    echo "0 results";
}
?>