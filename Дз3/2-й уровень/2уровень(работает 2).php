<?php
$f = 'file1.txt'; //файл с данными
$f1 = 'file2.txt';// пустой файл для записи

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
    echo '--------average---------' .PHP_EOL;

    $count=0;
    $sum = 0;
   
    $fileContents = file_get_contents($m);
    $fileContents = explode(PHP_EOL, $fileContents);
    foreach ($fileContents as $fileContent) {
        if($fileContent != ' '){
            $str = strlen($fileContent);
            $sum += $str;
            $count++;
        }

    }
    $medium = $sum/$count;
    echo 'сумма элементов всех строк: ' . $sum . PHP_EOL;
    echo'количество строк: ' . $count . PHP_EOL;
    echo 'средняя длина строки: ' . $medium . PHP_EOL;
    foreach ($fileContents as $fileContent) {
        if($fileContent != ' '){
            $str = strlen($fileContent);
            if($str>$medium){
                $fileData .= $fileContent . PHP_EOL;
            }
        }
    }
    file_put_contents($n,$fileData);
    return true;
}
average($f, $f1);


