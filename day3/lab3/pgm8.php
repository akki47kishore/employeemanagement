<?php
	/*$d11='01-06-2015';
	$d21='31/07/2015';*/
	
	$date1=new datetime('01-06-2015');
	$date2=new datetime('31-07-2015');
	$d1 = strtotime("31-07-2015");
	$d2 = strtotime("01-06-2015");
	$holi=0;
	$datediff = $d1- $d2;
	$k= round($datediff / (60 * 60 * 24));
	for($i=1;$i<=60;$i++)
	{
		if(($date1->format('D')=='Sat')||($date1->format('D')=='Sun'))
			$holi++;
		$date1->modify('+1 day');
	}
	echo "\nWorking days=",$k-$holi;
?>
