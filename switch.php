<?php
echo "<hr>";
$month =  date('M');
switch ($month) {
    case 'Jan':
        echo "เดือนมกราคม";
        break;
    case 'Feb':
        echo "เดือนกุมภาพันธ์";
        break;
    case 'Mar':
        echo "เดือนมีนาคม";
        break;
    case 'Apr':
        echo "เดือนเมษายน";
        break;
    case 'May':
        echo "เดือนพฤษภาคม";
        break;
    case 'Jun':
        echo "เดือนมิถุนายน";
        break;
    case 'Jul':
        echo "เดือนกรกฎาคม ";
        break;
    case 'Aug':
        echo "เดือนสิงหาคม";
        break;
    case 'Sept':
        echo "เดือนกันยายน";
        break;
    case 'Oct':
        echo "เดือนตุลาคม";
        break;
    case 'Nov':
        echo "เดือนพฤศจิกายน";
        break;
    default:
    echo "เดือนธันวาคม";
        break;
}
