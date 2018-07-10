<?php 
 $email="test@test.com";
 $c=".com";
 $len=strlen($email);
 $pos=$len-4;
 
 $p=strrpos($email,$c);
  
 if($p==$pos)
   echo "YES";
 else  
    echo "NO";
?>
