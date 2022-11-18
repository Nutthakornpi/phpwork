<?php

$prefix = $_GET['prefix'];


// if($prefix == 'นาย'){
//   echo "ผู้ชาย";
// }elseif($prefix == 'เด็กชาย'){
//   echo "ผู้ชาย";
// }elseif($prefix == 'นาง'){
//   echo "ผู้หญิง";
// }elseif($prefix == 'นางสาว'){
//    echo "ผู้หญิง";
// }elseif($prefix == 'เด็กหญิง'){
//     echo "ผู้หญิง";
// }else{
//    echo "กระเทย";
// }
 
switch($prefix){
        case "นาย":
            echo "ผู้ชาย";
            break;
        case "เด็กชาย":
            echo "ผู้ชาย";
            break;
        case "นาง":
            echo "ผู้หญิง";
        break;
        case "นางสาว";
            echo "ผู้หญิง";
            break;
        case "เด็กหญิง";
            echo "ผู้หญิง";
            break;
        default:
        echo "กระเทย";
        }


?>