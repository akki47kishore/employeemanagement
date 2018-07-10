<?php
$date1=date_create("2014-04-30 08:00:00");
$date2=date_create("2017-07-17 07:00:00");
$diff=date_diff($date1,$date2);
echo $diff->format("Month: %m <br> days: %d <br>Hour: %h <br>Minutes:%m.");
?>
