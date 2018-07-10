<?php
function palindrome($str)
{
  $i=0;
  $len=strlen($str);
  
  $newstr=str_replace(" ","",$str);
  
  $rev=strrev($newstr);
  $i=substr_compare($rev,$newstr,0);
  if($i==0)
     echo "palindrome";
  else 
     echo "not palindrome";
}
$string="nurses run";
palindrome($string);
?>
