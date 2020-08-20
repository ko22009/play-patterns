<?php

namespace PlayPatterns\Structural\Flyweight;

class MakeModelCar
{

    private $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function getSharedState()
    {
        return $this->sharedState;
    }

}
