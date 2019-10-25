<?php

$array = ['Ivan', 'Kalinin', 'javascript', 'developer'];
function func($mas){
foreach ($mas as $str) {


foreach (count_chars($str, 1) as $i => $val) {
	echo "\"" , chr($i) , "\" встречается в строке $val раз(а).\n";
}
echo '-----STRING------' . PHP_EOL;
}
}
func($array);