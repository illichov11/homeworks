<?php

class Liquid {
    function aggregation_state(){
        echo "Я жидкость";
    }
}
class Steam {
    function aggregation_state(){
        echo "Я газик";
    }
}
class Ice {
    function aggregation_state(){
        echo "Я холодный кубик льда";
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
            $this->temperature->aggregation_state();
        }
       else echo 'Проверьте объект';
    }
}

$water = new Water();
$stdin = fopen('php://stdin', 'r');
echo 'Здравствуйте, я водичка, посмотрите, пожалуйста, на градусник и напишите температуру' . PHP_EOL;
$degrees =fgets($stdin);
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
elseif($degrees >= 0 && $degrees <100){
    $liquid = new Liquid();
    $water->a($liquid);
    $water->get_aggregate_state();
}
else echo "Вы ввели не температуру";
