<?php

$handle = fopen ("php://stdin", "r");

$x = intval(fgets($handle));
$number = 1;
$fizz = intval(fgets($handle));
$buzz = intval(fgets($handle));
while($number <= $x){

if(($number % $fizz == 0 )&&($number % $buzz == 0)){
	echo "fb ";
}
elseif($number % $fizz == 0){
	echo "f ";

}elseif($number % $buzz == 0){
	echo "b ";
}
else echo $number . ' '; 
$number++;

} 




?>