<?php

namespace PlayPatterns\Structural\Flyweight;

class Car
{

    private MakeModelCar $makeModelCar;
    private string $plates;
    private string $owner;

    public function __construct($makeModelCar, $plates, $owner)
    {
        $this->makeModelCar = $makeModelCar;
        $this->plates = $plates;
        $this->owner = $owner;
    }

}
