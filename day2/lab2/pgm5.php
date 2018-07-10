<?php 
$string1='Hello world';
$string2='Hello world';
$val=substr_compare($string1,$string2,0);
if($val==0)
echo "The two strings are same";
elseif($val<0)
echo "string1 < string2";
else
echo "string1 > string2";
?>
