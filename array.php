<?php
$name = array('Nutthakorn','pikhuntod','nine','nineny');

echo "<h2>index array</h2>";

echo"<h3>"."จำนวนข้อมูล".count($name)."ชุด<br>"."</h3>";
echo '<hr>';
echo "<h1>for</h1>";
for($num = 0;$num < count($name);$num++){
 echo'ข้อมูล='.$name[$num]."<br>";
}
echo"<hr>";
echo "<h1>foreach</h1>";
foreach($name as $ni)
 echo $ni."<br>";

 $students = array('Nutthakorn'=>'30.3',
                    'pikhuntod'=>'2.3',
          
                    'nine'=>'1.11',
                    'nineny'=>'11.1');
 echo "<h2>Associative array</h2>";
 echo"<h3>"."จำนวนข้อมูล".count($students)."ชุด<br>"."</h3>";
echo '<hr>';
 print_r($students);
 echo '<hr>';
 echo"ข้อมูลindex2=".$students['Nutthakorn'];
 echo '<hr>';
 foreach($students as $kstd => $vstd){
    echo "key($kstd)"."=>"."var($vstd)"."<br>";
 }
 echo "<hr>";




 
 $subjects = array (
    array("Basic HTML","1-4-3","nutthakorn pikruntod"),
    array("Basic Datavase","1-2-2","sanu pikruntod"),
    array("Basic java","2-2-2","nutthakan pikruntod"),
    array("Basic Network","2-3-3","nutthakit pikruntod"),
    array("Basic javascript","0-4-3","nutthapong pikruntod"),
  );
  echo "จำนวนชุดข้อมูล".count($subjects);
  echo "<br>";
  echo $subjects[3][1];
  for($r = 0; $r < count($subjects); $r++){
    for($c = 0;$c < 3; $c++){
    echo $subjects[$r][$c]."<br>";
    }
    echo"<hr>";
  }

?>