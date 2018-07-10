<?php
$str="082307";
$newstr=chunk_split($str,2,":");
$newstr=rtrim($newstr,":");

echo "new string is $newstr";

?>
