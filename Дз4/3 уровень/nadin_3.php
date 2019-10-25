<?php
$fizzbuzz1 = 'fizzbuzz1.txt';


$fileContents = file_get_contents(
$fizzbuzz1);
$fileContents = explode(PHP_EOL, $fileContents);

function fizz($fizz){
 $number = 1;
 $data = sscanf($fizz, "%d %d %d");
 while ($number<$data[2]) {
 	$result .=(($number % $data[0] == 0) && ($number % $data[1] == 0)) ? "fb " : (($number % $data[0] == 0) ? "f " : (($number % $data[1] == 0) ? "b " : $number . ' '));
 	$number ++;
 }
 return $result;
}

function fizzbuzz($fizzbuzz1){
	$res = fizz($fizzbuzz1);
	echo $res.PHP_EOL;
	return true;
}
array_map('fizzbuzz', $fileContents);