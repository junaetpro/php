<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create database table</title>
</head>
<body>
    

<?php
$servern= "localhost";
$usern= "web_1";
$pass= "123";
$dbn= "day_04";


$conn= new mysqli($servern, $usern, $pass, $dbn);
if(!$conn){ //if($conn->connect_error)
    echo "not connect";
}else{
    echo "connected";
}

$sql = "CREATE TABLE day04 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if($conn -> query($sql)=== TRUE){ //if (mysqli_query($conn, $sql)){}
    echo "database table create successfully";
}else{
    echo "database table create not successfully";
}



// $conn->close();
// mysqli_close($conn);
?>
</body>
</html>