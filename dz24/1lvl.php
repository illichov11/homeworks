<?php

abstract class AggregationState{
    function aggregationState(){
        echo "I am " . strtolower(get_class($this)) . PHP_EOL;
        echo $this->prikol() . PHP_EOL;
         }
         abstract protected function prikol();
}

class Liquid extends AggregationState {
    protected function prikol(){
        return "i want to save a million african citizens";
    }

    public function __construct()
    {

}
}
class Steam extends AggregationState {
    protected function prikol(){
        return 'not "valve" product, please dont ask me to play Dota2';
    }
public function __construct()
{
}
}
class Ice extends AggregationState {
    protected function prikol(){
        return "I want to cool a glass of your whiskey";
    }

public function __construct()
{
}
}
class Water {
    private $temperature;
    function a($temperature) {
        if(is_object($temperature)) {
        $this->temperature = $temperature;
            }
        else return;
    }
    function get_aggregate_state(){
        if (is_object($this->temperature)) {
            $this->temperature->aggregationState();
        }
       else echo 'Man, u have some troubles';
    }
}

$water = new Water();
$stdin = fopen('php://stdin', 'r');
echo 'Hello, look through the window and tell me the temperature, nigga' . PHP_EOL;
$degrees = intval(fgets($stdin));
if ($degrees < 0){
    $ice = new Ice();
    $water->a($ice);
    $water->get_aggregate_state();
}
elseif($degrees > 100){
    $steam = new Steam();
    $water->a($steam);
    $water->get_aggregate_state();
}
elseif($degrees >= 0 && $degrees <= 100){
    $liquid = new Liquid();
    $water->a($liquid);
    $water->get_aggregate_state();
}
else echo "I SAID TEMPERATURE, MAN, WTF???";
