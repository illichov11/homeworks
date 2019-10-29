<?php
define("five", 5);
for ($i = 1; $i <=100; $i++ ) { 
	if ($i % five == 0) {
echo "test";
		echo $i . PHP_EOL;
	}
}
