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
//===============================================

$name="junaet Islam";
echo "$name <br>";
echo strlen($name). "<br>";
echo str_word_count($name). "<br>";
echo strpos($name, "Islam"). "<br>";
echo strtoupper($name) . "<br>";
echo strtolower($name). "<br>";
echo str_replace("junaet","sany", $name). "<br>";
echo strrev($name) . "<br>";
echo substr($name, 2). "<br>";
echo substr($name, 2,5). "<br>";
//==============================================
echo pi(). "<br>";
echo min(0,5,6,-9). "<br>";
echo max(0,5,6,-9). "<br>";
echo sqrt(36). "<br>";
echo round(0.51). "<br>";
echo rand(10,30). "<br>";
//============================================
$taka=20;
if($taka<50){
    echo "not allow <br>";
}else{
    echo "allow <br>";
}
//=======================================
switch($taka){
    case 10:
        echo "10 taka <br>";
        break;
    case 20:
        echo "20 taka <br>";
        break;
    default:
        echo "more 20 taka <br>";
}
//===========================================
$loop=0;
for($loop; $loop<=5; $loop++){
    echo $loop;
}
echo "<br>";
$loop=0;
while($loop<=5){
    echo $loop;
    $loop++;
}
echo "<br>";
$loop=0;
do{
    echo $loop;
    $loop++;
}while($loop<=5);
//========================================
echo "<br>";
function calcu($value1, $oparetor, $value2){
    if($oparetor == "+"){
        echo $value1 + $value2;
    }elseif ($oparetor == "-"){
        echo $value1 - $value2;
    }else{
        echo "incorrect";
    }
}
calcu(2,"+",5);
echo "<br>";
calcu(2,"-",5);
//============================================
echo "<br>";
$ar= array("apple","banana","cola");
echo $ar[0]. "<br>";
$ar[1]="kathal"; //-------remove and add
var_dump($ar). "<br>";
array_push($ar, "ford");

$arr= ["apple","banana","cola"];

?>
    
</body>
</html>