<?php
$file1 = fopen('file1.txt', 'r+');
$file2 = fopen('file2.txt', 'r+');

function by_two($x,$y){
  while (! feof($x)){
    $r = fgets($x);
    fwrite($y,$r);
    $r = fgets($x);
    
}

return true;
}
by_two ($file1,$file2);