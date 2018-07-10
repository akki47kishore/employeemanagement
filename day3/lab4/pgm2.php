<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$frameworksAndLicense = array(
"Zend Framework" => "New BSD",
"symfony" => "MIT",
"CakePHP" => "MIT",
"MODX" => "GPL",
"CodeIgniter" => "Apache/BSD",
"Seagull" => "BSD",
"Prado" => "BSD",
"Solar" => "New BSD",
"eZ Components" => "New BSD",
"Kohana" => "BSD",
"Jelix" => "LGPL",
"FLOW3" => "LGPL",
"Sapphire" => "BSD",
"PHP for Applications" => "LGPL",
"Yii" => "BSD",
"Limonade" => "MIT",
"Tekuna" => "MIT",
"DooPHP" => "New BSD",
"Fat-Free" => "GPL",
"Akelos" => "LGPL",
"PHP on TRAX" => "GPL",
"ATK" => "LGPL",

"Adventure PHP Framework" => "LGPL",
"FuelPHP" => "MIT",
"Nette" => "New BSD/GPL",
"Recess" => "MIT",
"Flourish" => "MIT",
"Nephtali" => "MIT",
"Agavi" => "LGPL",
"Gantry" => "GPL2",
"Phaux" => "MIT",
"Lexa-Tools" => "MIT",
"Vork" => "GPL3",
"toKernel" => "GPL3",
"Rain" => "MIT",
"ZanPHP" => "GPL",
"Swiftlet" => "MIT",
"Lamplighter" => "MIT",
"orinoco" => "MIT",
"Zoop" => "ZPL",
"Sourdough" => "LGPL",
"Lithium" => "BSD",
"Slim" => "MIT",
"Silex" => "MIT",
"Laravel" => "MIT",
"Osezno" => "GPL3",
"Zend Framework 2" => "New BSD",
"Symfony 2" => "MIT",
"PhalconPHP" => "New BSD"
);
foreach ($frameworksAndLicense as $x=>$y)
{
$a="Framework: ".$x.", License : ".$frameworksAndLicense[$x]."<br>";
echo $a;
fwrite($myfile,$a);
fwrite($myfile,"\n");
}
fclose($myfile);
?>
