<?php

namespace PlayPatterns\Creational\FactoryMethod;

abstract class Creator
{

    public function getCase()
    {
        return $this->createProduct();
    }

    abstract public function createProduct(): InCase;

}
