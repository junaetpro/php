<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database server connect</title>
</head>
<body>


<?php
$servern= "localhost";
$usern= "web_1";
$pass= "123";

$conn= new mysqli($servern, $usern, $pass);

//if (!$conn){}
if($conn->connect_error){ 
    echo "not connect";
}

echo "connected"
?>
    
</body>
</html>