<?php
$text="consider the following code";
$c=strpos($text,"code");
$i=0;
While($c!== FALSE)
 {
  $len=strlen($text);
  $newtext=substr($text,0,$c-1);
  $newtext=$newtext.substr($text,$c+4,$len);
  $text=$newtext;
  $c=strpos($text,"code");
  
 }
echo "$text";
?>
