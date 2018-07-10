<?php

$data=file_get_contents('Lab5.pdf');
file_put_contents('newpdf.pdf',$data);
echo "done";
?>
