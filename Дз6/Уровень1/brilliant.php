<?php

$handle = fopen("php://stdin", "r");
$num = fgets($handle);

if($num % 2 == 0){
	echo "введено четное число";
}
else{
for ($i=1; $i <= $num; $i+=2) { 
	
	
	echo str_repeat(" ", (($num - $i) / 2));
	echo str_repeat("*", $i);
	echo str_repeat(" ", (($num - $i) / 2));
	echo "\n";

}
for ($i = $num - 2; $i >= 1 ; $i-=2) { 
	
	echo str_repeat(" ", (($num - $i) / 2));
	echo str_repeat("*", $i);
	echo str_repeat(" ", (($num - $i) / 2));
	echo "\n";
}
}

