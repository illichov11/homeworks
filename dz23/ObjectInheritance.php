<?php

class Vehicle {
    public $engine, $steering_wheel;

    public function __construct($engine= 0)
    {
        $this->engine = $engine;
        $this->steering_wheel = true;
    }
}
class Automobile extends Vehicle {
    public $wheel, $pedal;

    public function __construct($wheel = 4, $pedal = 3)
    {
        parent::__construct();
        $this->wheel = $wheel;
        $this->pedal = $pedal;
    }
}

class Car extends Automobile {
private $climate_controler;

    public function getClimateControler()
    {
        return $this->climate_controler;
    }

    public function setClimateControler($climate_controler)
    {
        $this->climate_controler = $climate_controler;
    }
    public function __construct($climate_controler = false)
    {
        parent::__construct();
        $this->climate_controler = $climate_controler;
        $this->wheel = 4;
}
}
$vehicle = new Vehicle(2.2);
$auto = new Automobile();
$auto->engine = 1.8;
$car = new Car();
$car->engine = 1.5;
$car->setClimateControler(false);


var_dump($car);
