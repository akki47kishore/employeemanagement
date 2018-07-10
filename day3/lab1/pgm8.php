<?php
$cities=array("Itanagar","Dispur","Patna","Panaji","Raipur","Gandhinagar","Srinagar","Bangalore");
$c=count($cities);
for($i=0;$i<$c-1;$i++)
 {
   echo "$cities[$i], ";
 }
echo "$cities[$i]";
echo "<br>";
echo"<br> After pushing:- <br> ";

$cities[$c]="Thiruvananthapuram";
$cities[$c+1]="Bhopal";
$cities[$c+2]="Mumbai";
$cities[$c+3]="Bangalore";
$cities[$c+4]="Raipur";
$c=count($cities);
for($i=0;$i<$c-1;$i++)
 {
   echo "$cities[$i], ";
 }
echo "$cities[$i]";

echo "<br>";
echo "<br>After sorting:-<br>";

sort($cities);
$c=count($cities);
for($i=0;$i<$c-1;$i++)
 {
   echo "$cities[$i], ";
 }
echo "$cities[$i]";
echo "<br>";
echo "<br>removing duplicates <br>";
$j=0;
for($i=0;$i<$c;$i++)
 {
  $newarray[$j]=$cities[$i];
  
  $j++;
  while(strcmp($cities[$i],$cities[$i+1])==0 && $i!=$c)
    $i++;
  
 }
 $c=count($newarray);
for($i=0;$i<$c-1;$i++)
 {
   echo "$newarray[$i], ";
 }
echo "$newarray[$i]";
?>
 
