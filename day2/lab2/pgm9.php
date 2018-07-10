<?php 
$string='The strrchr() function find the position of the last occurrence of a string within another string....';
$p=strrpos($string,'string');
$pos=strrchr($string,'string');
echo "The last occurence of 'string' in the sentence is '"."$pos"."'";
echo"<br>";
echo "at position ".$p;
?>
