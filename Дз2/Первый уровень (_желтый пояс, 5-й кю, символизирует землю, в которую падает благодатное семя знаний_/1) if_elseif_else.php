<?php
phpinfo();

$handle = fopen ("php://stdin", "r");
$income = fgets($handle);
$spending = fgets($handle);
$result = $income - $spending;

if($result > 1000) {

	echo "It's good\n";
} elseif(($result > 100) && ($result < 1000)){

	echo "You can better\n";
} else echo "Man, you dont even try\n";

?>