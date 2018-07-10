<?php
function leap($str)
{    
     
     $date=date_create($str);
     $l=$date->format('L'); 
     if($l==1) 
          echo "leap year";
     else 
          echo "not a leap year";
}

?>