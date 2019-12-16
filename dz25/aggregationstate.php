<?php
abstract class AggregationState{
function aggregationState(){
echo "I am " . strtolower(get_class($this)) . PHP_EOL;
echo $this->prikol() . PHP_EOL;
}
abstract protected function prikol();
}
