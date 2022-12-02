<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];
$num5 = $_GET['num5'];
$num6 = $_GET['num6'];
$num7 = $_GET['num7'];
$num8 = $_GET['num8'];
$num9 = $_GET['num9'];
$num10 = $_GET['num10'];
$num11 = $_GET['num11'];
$num12 = $_GET['num12'];
$pro = $_GET['pro'];


$number = array(
    'num1'=> $num1,
    'num2'=> $num2,
    'num3'=> $num3,
    'num4'=> $num4,
    'num5'=> $num5,
    'num6'=> $num6,
    'num7'=> $num7,
    'num8'=> $num8,
    'num9'=> $num9,
    'num10'=> $num10,
    'num11'=> $num11,
    'num12'=> $num12
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background: linear-gradient(120deg, #ee37e5, #3dccdf);
            height: 100vh;
    }
    div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            background: #EEF0EA;
            border-radius: 10px;
        }
        h1{
            text-align: center;
            font-size: 120px; 
            color: #dd3bfd;
        }
        h4{
            text-align: center;
            font-size: 40px; 
        }
        p{
            text-align: center;
            font-size: 20px; 
        }


    </style>
</head>
<body>
    <div>
    
<?php
switch ($pro) {
    case 'จำนวนข้อมูล':
        $show1 ="จำนวนข้อมูล";
       $show = count($number);
      echo "<h4>". $show1."</h4>";
       echo"<h1>". $show."</h1>";
        break;
    
    default:
    foreach($number as $kstd => $vtd){
        $show2 ="key($kstd)"."   
        "."value($vtd)"."<br>";
        echo "<p>". $show2."<p>";
     }
        break;
}?>
   
    </div>

</body>
</html>
