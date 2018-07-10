<?php
$f=fopen("php.txt","r");
$str=fgets($f);
$f2=fopen("temp/php.txt","w");
while($str != FALSE)
{
    if(stripos($str,"PHP")!== FALSE)
    {
         fputs($f2,$str);
         echo $str."<br>"; 
    }
    $str=fgets($f);
}
fclose($f);
fclose($f2);
?>