<?php

$array1 = ["ghhjklkoli", "qwiejehrnfdkfhddkdldfjfoeembvb", "ewqoeodkvjbnvc"]; // первый массив строк
$array2 = ["jfkdlsjvb", "reoejghe", "eptibnvdkfi"]; // второй массив строк

function absr($arr1, $arr2){ // обьявление функции
	if(count($arr1) && count($arr2) < 3){ //проверка массива
		throw new Exception("Wrong Massive"); // определение ошибки
		
	}
	$res = []; //массив для записи результатов
	for ($i = 0; $i < 3; $i++){ // цикл для прохождения по каждой строке массива

		$res[] = abs(strlen($arr1[$i]) - strlen($arr2[$i])); //нахождение разницы длин по модулю строк
	}
	echo max($res); //вывод результата
	return true; 
}

try{
	absr($array1, $array2); // вызов функции
}catch(Exception $e)
{
	 echo 'something wrong' . PHP_EOL . $e ->getMessage(); //вывод ошибки
}
