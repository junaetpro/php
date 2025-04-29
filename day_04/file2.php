<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create database</title>
</head>
<body>

<?php
$servern= "localhost";
$usern= "web_1";
$pass= "123";


$conn= new mysqli($servern, $usern, $pass);
if(!$conn){ //if($conn->connect_error)
    echo "not connect";
}else{
    echo "connected";
}


$sql= "CREATE DATABASE day_04";
if($conn -> query($sql)=== TRUE){ //if (mysqli_query($conn, $sql)){}
    echo "database create successfully";
}else{
    echo "database create not successfully";
}


// $conn->close();
// mysqli_close($conn);
?>
    
</body>
</html>