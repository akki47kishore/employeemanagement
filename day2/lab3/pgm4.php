<?php
$url='http://www.w3resource.com/php-exercises/php-basic-exercises.php';
$sch=parse_url($url,PHP_URL_SCHEME);
echo "Scheme : "."$sch";
echo "<br>";
$host=parse_url($url,PHP_URL_HOST);
echo "Host : "."$host";
echo "<br>";
$path=parse_url($url,PHP_URL_PATH);
echo "PATH : "."$path";
echo "<br>";
?>
