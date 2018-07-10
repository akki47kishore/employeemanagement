<?php
$input='17-07-2015 17:07:28';
$ymd = DateTime::createFromFormat('d-m-Y H:i:s', $input)->format('Y-m-d H:i:s');
echo "$ymd <br>";
$ymd= DateTime::createFromFormat('d-m-Y H:i:s', $input)->format('d/m/Y ');

echo "$ymd <br>";
$ymd= DateTime::createFromFormat('d-m-Y H:i:s', $input)->format('h:i A');

echo "$ymd <br>";
$ymd= DateTime::createFromFormat('d-m-Y H:i:s', $input)->format('h:i A ');
echo "$ymd on ";
$ymd= DateTime::createFromFormat('d-m-Y H:i:s', $input)->format('l dS F Y ');
echo "$ymd ";


?>

