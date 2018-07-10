<?php
$color=array('white','green','red','blue','black');
$val='red';
$key=array_search($val,$color);
$i=0;
$len=count($color);
while($i<$key)
 {
  $newarr[$i]=$color[$i];
  $i++;
 }
$j=$i;
$i++;
while($i<$len)
{
 $newarr[$j]=$color[$i];
 $i++;
 $j++;
 }
$color=$newarr;
foreach($color as $val)
  echo "$val <br>"
?>
