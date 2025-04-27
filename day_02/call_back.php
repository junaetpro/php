<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>call back</title>
</head>
<body>

<?php

function greet($name){
    echo "hi, $name !..";
}
function sayhlw($cbk){
    echo $cbk("junaet");
}

sayhlw("greet");

?>
    
</body>
</html>