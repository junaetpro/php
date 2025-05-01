<?php

$server="localhost";
$user="web_1";
$pass="123";
$database="day_04";

$conn= new mysqli($server, $user, $pass, $database);
if(!$conn){
    echo "connect problm";
}else{
    echo "connected";
}

$f_name= $_POST["firstname"];
$l_name=$_POST["lastname"];
$email=$_POST["email"];

$sql = "INSERT INTO day04(firstname, lastname, email) VALUES ('$f_name', '$l_name', '$email')";


if(mysqli_query($conn, $sql)){
    echo "record save";
}else{
    echo "record not save";
}

?>