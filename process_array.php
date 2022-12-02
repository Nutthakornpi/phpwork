<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];
$num5 = $_GET['num5'];
$num6 = $_GET['num6'];
$pro = $_GET['pro'];


$number = array(
    $num1,
    $num2,
    $num3,
    $num4,
    $num5,
    $num6
);

switch ($pro) {
    case 'จำนวนข้อมูล':
        echo "จำนวนข้อมูล".count($ng);
        break;
    
    default:
       foreach($number as $nm){
        echo $nm."<br>";
       }
        break;
}
   

?>