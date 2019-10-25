<?php
$fizzbuzz1 = 'fizzbuzz1.txt'; // Файл со строками
$fizzbuzz2 = 'fizzbuzz2.txt'; // пустой файл для записи
$str = '2 5 18';
function fizz($str){
$number = 1;
	$data = sscanf($str,"%d %d %d");
	while($number<$data[2]){
	$result .=(($number % $data[0] == 0) && ($number % $data[1] == 0)) ? "fb " : (($number % $data[0] == 0) ? "f " : (($number % $data[1] == 0) ? "b " : $number . ' '));
	$number ++;
}
return $result;
}
fizz($str);

function fizzbuzz($fizzbuzz1, $fizzbuzz2){
$fileContents = file_get_contents($fizzbuzz1);
$fileContents = explode(PHP_EOL, $fileContents);
foreach ($fileContents as $fileContent) {
	$res = fizz($fileContent);
	file_put_contents($fizzbuzz2, $res . PHP_EOL,FILE_APPEND);

}


}
fizzbuzz($fizzbuzz1, $fizzbuzz2);