<?php
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>39,"Ramesh"=>"40");
echo "sorting names in ascending order by value<br>";
asort($name);
foreach($name as $key=>$val)
 {
   echo "$key - $val ";
 }
echo "<br><br>sorting names in ascending order by key<br>";
ksort($name);
foreach($name as $key=>$val)
 {
   echo "$key - $val ";
 }
echo "<br><br>sorting names in descending order by value<br>";
arsort($name);
foreach($name as $key=>$val)
 {
   echo "$key - $val ";
 }
echo "<br><br>sorting names in descending order by key<br>";
krsort($name);
foreach($name as $key=>$val)
 {
   echo "$key - $val ";
 }
?>
