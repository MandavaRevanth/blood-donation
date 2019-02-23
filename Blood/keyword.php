<?php
include "conn.php";
$bg=$_POST["bg"];
$dist=$_POST["distr"];
/*echo $bg;*/
$sql = "SELECT first_name, last_name,d_o_b,mobile_no FROM info_table WHERE bg_grp like '$bg' and district like '%".$dist."%' ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "THE PEOPLE WITH $bg BLOOD GROUP ARE "."<br>";
    while($row = $result->fetch_assoc()) {
        
        echo "  Name: " . $row["first_name"]. " " . $row["last_name"]. " <br>"."DATE OF BIRTH".$row["d_o_b"]."<br>"."CONTACT INFO:".$row["mobile_no"]."<br>"."ADRESS:"."<br>";
        echo "----****--------***------****------*****-------******------***-----";
    }
} else {
    echo "SRY UNABLE THERE ARE NO PEOPLE WITH YOUR MATCHING BLOOD GROUP";
}
?>
<html>
    <head>
    <style>
        body{
            border:3px solid black;
            margin:10%;
            
            font-size: 20px;
            background-color:dimgrey;
            color: white;
        }
        }
        </style>
    </head>
<body>
    
    </body>
</html>