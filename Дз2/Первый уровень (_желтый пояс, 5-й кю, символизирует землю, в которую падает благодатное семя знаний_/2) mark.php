<?php

echo "Give me the mark!\n";
$handle = fopen ("php://stdin", "r");
$mark = fgets($handle);

if($mark == 2){
	echo "I am better!!\n";
}
elseif($mark == 3){
	echo "OK :(\n";
}
elseif($mark == 4){
	echo "I am good :)\n";
}
elseif ($mark == 5){
	echo "YeeeeWhaaaa!!!!!\n";
}
else echo "WTFFFFFFFFFFF?";