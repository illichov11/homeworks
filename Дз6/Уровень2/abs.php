<?php

$array1 = ["ghhjklkoli", "qwiejehrnfdkfhddkdldfjfoeembvb", "ewqoeodkvjbnvc"];
$array2 = ["jfkdlsjvb", "reoejghe", "eptibnvdkfi"];
function absr($arr1, $arr2){
$res = [];
for ($i = 0; $i < 3; $i++){

$res[] = abs(strlen($arr1[$i]) - strlen($arr2[$i]));

}
echo max($res);
}
absr($array1, $array2);