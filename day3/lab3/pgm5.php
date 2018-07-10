<?php
    $d=date('Y-m-d H:i:s');
    $date=new datetime($d,new datetimezone('IST')); // create new datetime obj of IST timezone 
    echo $date->format('T Y-m-d H:i:s  P'),"<br><br>";

    $date2=new datetime($d,new datetimezone('BST')); 
    echo $date2->format('T Y-m-d H:i:s  P'),"<br><br>";

    $date3=new datetime($d,new datetimezone('UTC'));
    echo $date3->format('T Y-m-d H:i:s  P'),"<br><br>";

    $date4=new datetime($d,new datetimezone('America/chicago'));
    echo $date4->format('T Y-m-d H:i:s  P'),"<br><br>";
?>
