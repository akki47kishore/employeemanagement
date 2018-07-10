<?php
$color1=array('white','green','red','blue','black');
$key=array_search('red',$color1);
foreach($color1 as $v )
  echo "$v ";
echo " <br> <br>";
echo "$color1[$key]";
?>
