<?php
$number=123.4;
setlocale(LC_MONETARY,'en_US.UTF_8');
echo money_format("%.2n",$number);
?>
