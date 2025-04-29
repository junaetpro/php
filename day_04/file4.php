<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data into table (day04)</title>
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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if($conn -> query($sql)=== TRUE){ //if (mysqli_query($conn, $sql)){} //-----single query
if($conn -> multi_query($sql)=== TRUE){ //if (mysqli_multi_query($conn, $sql)){} //--- multiple query
    echo "database table create successfully";
}else{
    echo "database table create not successfully";
}



// $conn->close();
// mysqli_close($conn);
?>
    
</body>
</html>