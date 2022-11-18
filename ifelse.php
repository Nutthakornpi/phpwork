<?php

$score = 200;

if ($score %2 == 0) {
  echo "เลขคู่";
}echo "<hr>";

if ($score %2 == 0) {
  echo "เลขคู่";
}else{
  echo "เลขคี่";
}
echo "<br>";
echo "<hr>";

$led ="yellow";
if($led == "red"){
  echo "STOP";
}elseif($led == "yellow" ){
   echo "SLOWLY";
}else{
   echo "GO";
}



?>