<?php 
$match='my_upgrade';
$filename='my_upgrade(1).zip';
//$c=-1;
$c=strpos($filename,$match);

if($c!==FALSE )
 echo "Match Found";
else
  echo "Match not Found";

?>
