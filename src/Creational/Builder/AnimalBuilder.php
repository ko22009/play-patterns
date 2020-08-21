<?php

namespace PlayPatterns\Creational\Builder;

abstract class AnimalBuilder implements IAnimalBuilder
{

    protected Animal $animal;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $model = static::getModel();
        $this->animal = new $model;
    }

    abstract public function getModel();

    public function setBread(string $name)
    {
        $this->animal->setBread($name);
    }

    public function setOwner(string $name)
    {
        $this->animal->setOwner($name);
    }

    public function setWeight(float $weight)
    {
        $this->animal->setWeight($weight);
    }

    public function getResult(): Animal
    {
        return $this->animal;
    }

    public function getBread()
    {
        $this->animal->getBread();
    }

}
