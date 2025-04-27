<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session1</title>
</head>
<body>

<?php
    $_SESSION["color"]="red";
    $_SESSION["name"]="junaet";
    echo "session variabe set!";
?>
    
</body>
</html>