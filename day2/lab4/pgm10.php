<?php
$char='a';
echo "$char -";
if($char !='z')
{
 $num=(ord($char)+1);
 $newchar=chr($num);
}
else
$newchar='a';

echo "$newchar";
?>
