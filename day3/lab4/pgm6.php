<?php

$arr=parse_ini_file("test.ini",true);
$pro=fopen("production","w");
foreach ($arr as $i => $values) {
    print "$i <br>";
      fwrite($pro," \n");   
    foreach ($values as $key => $value) {
        print "    $key => $value<br>";
        fwrite($pro,"   $key => $value\n");            
   }
    print "<br>";
    fwrite($pro,"\n");   

 
}
?> 
