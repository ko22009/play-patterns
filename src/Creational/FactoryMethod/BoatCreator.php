<?php

namespace PlayPatterns\Creational\FactoryMethod;

class BoatCreator extends Creator
{

    public function createProduct(): InCase
    {
        return new Container();
    }

}
