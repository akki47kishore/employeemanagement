<?php
$countries=array("Italy"=>"Rome","Luxembourg"=>"Luxembourg","Belgium"=>"Brussels","Denmark"=>"Copenhagen","Finland"=>"Helsinki","France"=>"Pasris","Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin","Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid","Sweeden" =>"Stockholm","United Kingdom" =>"London","Cyprus" =>"Nicosia","Lithuania" =>"Vilnius","CzechRepublic" =>"Prague","Estonia"=>"Tallin","Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta","Austria"=>"Vienna","Poland"=>"Warsaw");
foreach($countries as $key=>$val)
 {
  echo "The capital of $key is $val<br>";
 }
ksort($countries);
echo "<br>";
foreach($countries as $key=>$val)
 {
  echo "The capital of $key is $val<br>";
 }
?>
