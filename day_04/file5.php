<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day 05</title>
</head>
<body>
    

<?php

$sarver= "localhost";
$user= "web_1";
$pass= "123";
$database= "day_04";

$conn= new mysqli($sarver, $user, $pass, $database);
if(!$conn){
    echo "not connect database <br>";
}else{
    echo "database connected <br>";
}

$sql= "INSERT INTO day04 (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";

if (mysqli_query($conn, $sql)){
    echo "add value";
}else{
    echo "not add";
}



?>
</body>
</html>