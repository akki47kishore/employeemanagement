<?php
include 'library.php';
$str =NULL;
$str=$argv[1];
function checknull($str)
{
    if($str =="")
    {   $error="Script Usage  php pgm10.php {date} \n date-Date you want to check ";
    throw new Exception ($error);
    }
    
}
try{
    checknull($str);
    leap($str);
    print "/n no error/n";
}
catch(Exception $e)

{
    echo 'Message ='.$e->getMessage();
}
?>