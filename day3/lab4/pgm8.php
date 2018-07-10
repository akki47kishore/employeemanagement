<?php
$files=glob('/var/www/html/day3/lab4/tmp/*');
foreach($files as $f)
{
     unlink($f);
}
echo "done";
?>
