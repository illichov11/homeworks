<?php

spl_autoload_register('autoloader');

function autoloader($className)
{
    include(getenv('PWD') . "/" .
        str_replace("\\", "/", strtolower($className)) . ".php");
}

$water = new Water();
$ice = new Ice();
$steam = new Steam();
$liquid = new Liquid();

$things = [$ice, $steam, $liquid];
foreach ($things as $thing) {
    $water->a($thing)->get_aggregate_state();
}