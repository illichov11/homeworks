<?php

$file1 = fopen("ttt.txt", "r+");

while (!feof($file1)) {
	
	$str = fgets($file1);
	$rt = explode(";", $str);
	$fst = explode(" ", $rt[0]);
	$sum = 0;
	for ($i=0; $i <count($fst) ; $i++) { 
		$sum += $fst[$i];
		
	}
	$res = intval($sum / count($fst));
	$ost = ($sum % count($fst));
	echo $res . PHP_EOL;
	echo $ost . PHP_EOL;
	$sec = explode(" ", $rt[1]);

	if (($sec[0] == $res) && ($sec[1] == $ost)) {
		echo "true" . PHP_EOL;
	}
	else echo "false" . PHP_EOL;

}
