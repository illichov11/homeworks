<?php
// функции работают по отдельности, вместе не работают
$file1 = fopen('file1.txt', 'r+');
$file2 = fopen('file2.txt', 'r+');
$f = 'file1.txt';

 function read($x){
	while (! feof($x)){
		$r = fgets($x);
		echo $r;
	
		}
	}

return true;

read ($file1); 

 function quantity($q){
	while (! feof($q)){
		$f = trim(fgets($q));
		$g = strlen($f);
		echo "$g \n";

}

return true;
}


quantity($file1); 

function average($m, $n){
	$c = sizeof(file('file1.txt'));
	$sum = 0;
	while (! feof($m)){
		$w = trim(fgets($m));
		$i = strlen($w);
		$sum += $i;
		}
		$medium = $sum / $c;
		fclose($m);

		$m = fopen('file1.txt', 'r+');
	while (! feof($m)){
		$w = trim(fgets($m));
		$i = strlen($w);
	if($i>$medium){
		fwrite($n, $w . PHP_EOL);	
	}
	}

return true;
}

average($file1, $file2); 




