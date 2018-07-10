<?php
$input="15-07-2015 09:30:00";
$date=date_create($input);

$da=date_modify($date,"+7 days");
echo "one week later ".date_format($da,'Y-m-d H:i:s')."<br><br>";
$date=date_create($input);
$da=date_modify($date,"+1 month");
echo "one month later ".date_format($da,'Y-m-d H:i:s')."<br><br>";
$date=date_create($input);
$da=date_modify($date,"+1 year");
echo "one year later ".date_format($da,'Y-m-d H:i:s')."<br><br>";
$date=date_create($input);
$da=date_modify($date,"+10 days");
echo "ten days later ".date_format($da,'m/d/y')."<br><br>";
$date=date_create($input);
$da=date_modify($date,"-3 days");
echo "3 days earlier ".date_format($da,'d-m-Y')."<br><br>";
$date=date_create($input);
$da=date_modify($date,"-1 month");
echo "one month earlier ".date_format($da,'Y-m-d H:i:s')."<br><br>";
?>
