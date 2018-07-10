<?php 
$str="PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML."  ;
$length=strlen($str);
$i=0;


while($length>=0)
{
$newstr[$i]=substr($str,$length,1);
$length=$length-1;
$i++;

}
foreach($newstr as $char)
 echo "$char";
?>
