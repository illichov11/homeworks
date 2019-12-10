<?php
function sum($arr, $index=0){
    if ($arr[$index] % 2 == 0){
        $arr[$index];
    }
    else $arr[$index] = 0;
    if (count($arr) === $index +1){
        return $arr[$index];
    }
    return $arr[$index] +sum($arr, ++$index);
}
echo sum([1,9, 6, 5, 2]) . PHP_EOL;