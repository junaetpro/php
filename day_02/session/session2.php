<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session2</title>
</head>
<body>

<?php
$_SESSION["color"]="green";
echo "name is ". $_SESSION["name"] . "<br>";
echo "color is ". $_SESSION["color"]. "<br>";
print_r($_SESSION)
?>
    
</body>
</html>