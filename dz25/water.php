<?php

class Water
{
    private $temperature;

    function a($temperature)
    {
        if (!is_object($temperature)) return false;
        $this->temperature = $temperature;
        return $this;
    }

    function get_aggregate_state()
    {
        if (method_exists($this->temperature, 'aggregationState')
            && is_subclass_of($this->temperature, "AggregationState")) {
            $this->temperature->aggregationState();
        } else echo 'Man, u have some troubles ';
    }
}
