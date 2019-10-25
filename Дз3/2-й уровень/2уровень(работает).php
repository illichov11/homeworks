<?php
$file1 = fopen('file1.txt', 'r+'); //файл с данными
$file2 = fopen('file2.txt', 'r+');// пустой файл для записи
$f = 'file1.txt';

 function read($x){
	
	echo '-------Read file-------' . PHP_EOL;
	$fileContents = file_get_contents($x);
	$fileContents = explode(PHP_EOL, $fileContents);
	foreach ($fileContents as $fileContent) {
		if($fileContent != ' '){
			echo $fileContent . PHP_EOL;
		}
	}
return true;
}

read($f);



 function quantity($q){
	

echo '--------quantity of ilne------' .PHP_EOL;
	$fileContents = file_get_contents($q);
	$fileContents = explode(PHP_EOL, $fileContents);
	foreach ($fileContents as $fileContent) {
		if($fileContent != ' '){
			echo strlen($fileContent) . PHP_EOL;
		}
	}


return true;
}
quantity($f);



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
		$l = fwrite($n, $w . PHP_EOL);	
	}
	}

return true;
}

average($file1, $file2); 




