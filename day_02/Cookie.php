<?php 
setcookie("sany", "junaet", time()+5);

if (isset($_COOKIE["sany"])) {
    echo "Cookie 'sany' is set!<br>";
    echo "Value is: " . $_COOKIE["sany"];
} else {
    echo "Cookie 'user' is not set!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    
</body>
</html>