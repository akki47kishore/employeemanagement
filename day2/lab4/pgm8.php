<?php
$str='the quick brown fox jumps over the lazy dog.';
$that="That";
$l=strlen($str);
$c=strpos($str,"the");
if($c!==FALSE)
  { 
   $j=0;
   while($j<$c)
   {
     echo substr($str,$j,1);
     $j++; 
   }
   echo "$that";
   $j=$j+3;
    while($j<$l)
   {
     echo substr($str,$j,1);
     $j++; 
   }
    
  }
else
  echo "no occurence of 'the'";
?>
