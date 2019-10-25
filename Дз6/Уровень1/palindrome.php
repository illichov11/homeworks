<?php


$kuda = 1000;
$otkuda = 10;
$del = 0;
while ($otkuda <= $kuda) {


	for ($k=1; $k <$otkuda ; $k++) {
	$k = $otkuda;

	for ($i=1; $i < $k ; $i++) { 
		if ($k % $i == 0) {
			$del++;
		}
		
	}
	
	if (($del < 2) && $otkuda == strrev($otkuda)) {
		
		echo $otkuda . PHP_EOL;
	}

	$del = 0;
	}
		$otkuda++;


}

