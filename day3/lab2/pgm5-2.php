<?php
$color1=array('white','green','red','blue','black');
$color2=array('grey','pink');
foreach($color1 as $val)
 echo "$val ";
echo"<br><br>";
foreach($color2 as $val)
 echo "$val ";
echo"<br><br>";
$newarray=array_merge($color1,$color2);
foreach($newarray as $val)
 echo "$val ";
?>
