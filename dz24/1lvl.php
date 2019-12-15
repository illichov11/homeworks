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
class Water
{
    private $temperature;

    function a($temperature)
    {
        if (!is_object($temperature)) return false;
        $this->temperature = $temperature;
        return $this;
    }

        function get_aggregate_state(){
            if (method_exists($this->temperature, 'aggregationState')
                && is_subclass_of($this->temperature, "AggregationState")) {
                $this->temperature->aggregationState();
            } else echo 'Man, u have some troubles';
        }
    }


    $water = new Water();
    $ice = new Ice();
    $steam = new Steam();
    $liquid = new Liquid();

    $things = [$ice, $steam, $liquid];

    foreach ($things as $thing){

        $water->a($thing)->get_aggregate_state();

    }