<?php

$handle = fopen("php://stdin", "r");
$quantity = fgets($handle);
$x = fgets($handle);
$y = fgets($handle);
$array = [];

echo "----random numbers----" . PHP_EOL;
	$array[] = rand($x, $y);
while(true) { 
	$random = rand($x, $y);
	if (!in_array($random, $array)) {
		$array[] = $random;
	}
	if(count($array) == $quantity){ break;}
}

print_r($array);