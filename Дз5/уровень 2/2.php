<?php

define("quantity", 100);

$kuda = 10000;
$otkuda = 2;
$del = 0;
$a = 0;
$sum = 0;
while ($otkuda <= $kuda) {
if($a<quantity){
	


	for ($k=1; $k <$otkuda ; $k++) {
	$k = $otkuda;
	for ($i=1; $i < $k ; $i++) { 
		if ($k % $i == 0) {
			$del++;
		}
		
	}
	
	if ($del < 2) {
		$sum += $otkuda;

		$a++;
	}

	$del = 0;
	}
		$otkuda++;
}else break;

}
echo $sum . PHP_EOL;
