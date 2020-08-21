<?php

namespace PlayPatterns\Creational\FactoryMethod;

class ShipCreator extends Creator
{

    public function createProduct(): InCase
    {
        return new Box();
    }

}
