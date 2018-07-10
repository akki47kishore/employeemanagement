<?php
$color=array('A'=>'blue','B'=>'green','c'=>'Red');
foreach($color as $key => $val)
 {
  $newarr[$key]=strtolower($val);
  $newarr2[$key]=strtoupper($val);
 // print_r()
 }
print_r($color);
echo "<br><br>Values in lower case<br>";   
print_r($newarr);
echo "<br><br>Values in lower case<br>";  
print_r($newarr2);
?>
