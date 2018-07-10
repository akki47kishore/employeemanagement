<?php
$mailid='rayy@example.com';
$i=strpos($mailid,"@");
$j=0;
while($j<$i)
 {
  echo substr($mailid,$j,1);
  $j++; 
 }
?>
