<?php
$url='www.example.com/public_html/index.php';
$fname=strrchr($url,"/");
$fname=ltrim($fname,"/");
echo "$fname";
?>
