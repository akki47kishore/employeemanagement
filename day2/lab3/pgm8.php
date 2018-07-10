<?php
function prime($n)
{
 $c=1;
 $j=2;
 while($j<=$n/2)
   { if($n % $j== 0)
        $c++;    
     $j++;
   }
  if($c==1)
    echo "$n"." is prime";
  else
    echo "$n"." is not prime";
}
$num=13;
prime($num);
?>

