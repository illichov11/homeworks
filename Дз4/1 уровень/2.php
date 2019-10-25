<?php

$array = ['djkfhdfgdkfhdof', 'opqwehqweighqiowe', 'sadksdsdkp','wqsdfwewfdf']; //15, 17, 10, 11
function length($str){
$max = $str[0];

	foreach($str as $long){
		$length = strlen($long);
		if($length > strlen($max)){
			$max = $long;

		}

	}
	echo $max;
}
length($array);