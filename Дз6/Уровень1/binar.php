<?php

$handle = fopen("php://stdin", "r");
echo "------введите число--------" . PHP_EOL;
$num = fgets($handle);

$bin = decbin($num);
$nib = strrev($bin);

echo "------перевод в двоичное значение числа------" . PHP_EOL;
echo $bin . PHP_EOL;

echo "----выберите две позиции----" . PHP_EOL;
$x = fgets($handle);
$y = fgets($handle);

// echo $nib[$x] . PHP_EOL . $nib[$y] . PHP_EOL;

if ($nib[$x] == $nib[$y]) {
	
 	echo "true";
 }
 else echo "false";


