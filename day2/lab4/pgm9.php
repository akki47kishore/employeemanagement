<?php
$String1='football';
$String2='footboll';
$l1=strlen($String1);
$l2=strlen($String2);
$i=0;
$k=0;
$j=0;
while($i<$l1)
   {
     $c= substr($String1,$i,1);
     $k= substr($String2,$i,1);
    
     if($c!=$k)
        {
          $j=1;
          break;
        }
     $i++;
  
   }
if($l1==$l2)
   { 
      if($j==0)
          echo "both strings are same ";
      else
         {
          echo "First difference between two strings at position $i. '$c' vs '$k' "; 
         }  
   }
else 
 {
  echo "First difference between two strings at position $i.";
 } 

?>
