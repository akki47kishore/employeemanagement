<?php
function fact($n)
{
 $j=2;
 $factorial=1;
 while($j<=$n)
   {  $factorial =$factorial*$j;
      $j++;
   }
  echo $factorial;
}
$num=7;
fact($num);
?>
