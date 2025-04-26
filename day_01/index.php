<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day_01</title>
</head>
<body>

<?php
// --- this is comment
#----- this is omment
/*-- this is comment--*/
echo "print php";

//-----------------------------------
$name="junaet";
$age= 24;
echo "my name is $name and age $age";
echo "my name is". $name . " and age " . $age;
$x=5;
$y="6";
echo $x + $y;
//====================================

$g1=4;
$g2=5;
f1();
function f1(){
    $l1=3;
    $l2=4;
    echo "<p>global variable show in local == $g1</p>"; //----not work
    echo "<p>local variable show in local == $l1</p>";
}
echo "<p>global variable show in global == $g2</p>";
echo "<p>local variable show in global == $l2</p>"; //----not work

?>
    
</body>
</html>