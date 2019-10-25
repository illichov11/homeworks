<?php

echo "Give it to me!\n";
$handle = fopen ("php://stdin", "r");
$nubmer = fgets($handle);

switch ($nubmer) {
	case $nubmer > 1000:
		echo "\n!!!WOOOOWWWW!!!\n";
		break;
	case $nubmer > 100:
		echo "Thanks, man!";
		break;
	case $nubmer > 10 && $nubmer <100:
		echo "OK :(";
		break;
	default:
		echo "WHAAAAAAAAAT????";
		break;
}

echo "\n";
