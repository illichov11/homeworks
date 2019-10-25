<?php

$array = [2, 4 , 5, 7, 211, 34, 42, 54, 12, 43, 34, 65];

function search($number){
	echo max($number) . PHP_EOL;
}
search($array);



function hcraes($rebmun){
	$max = $rebmun[0];
	foreach ($rebmun as $num) {
	if($num > $max){
			$max = $num;
	
		}


	}
echo $max;
}
hcraes($array);