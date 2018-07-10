<?php
$date1='17-03-2015 17:07:28';
$date2='07/04/2015 09:00:00';
if(strtotime($date1 )>strtotime($date2))
   {
    echo "date $date1 is larger";
   }
else if(strtotime($date1 )<strtotime($date2))
 {
  echo "date $date2 is larger"; 
 }
else
 echo "both dates atre same";
  ?>
