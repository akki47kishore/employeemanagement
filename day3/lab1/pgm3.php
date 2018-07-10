<?php
$text="There is no installation needed to use these functions; they are part of the PHP core";
$c=stripos($text,"PHP");
if($c!==FALSE)
  echo "True. 'PHP' found at position"."$c";
else
  echo "False.'PHP' not found";
echo "<br>";

$c=stripos($text,"JAVA");

if($c!==FALSE)
  echo "True. 'JAVA' found at position"."$c";
else
  echo "False.'JAVA' not found";
echo "<br>";

$c=stripos($text,"php");

if($c!==FALSE)
  echo "True. 'php' found at position"."$c";
else
  echo "False.'php' not found";
?>
