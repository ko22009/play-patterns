<?php

namespace PlayPatterns\Creational\Builder;

class BaseAnimal implements Animal
{

    private string $bread;
    private string $owner;
    private float $weigth;

    public function setOwner(string $name)
    {
        $this->owner = $name;
    }

    public function setWeight(float $weight)
    {
        $this->weigth = $weight;
    }

    public function getBread()
    {
        return $this->bread;
    }

    public function setBread(string $name)
    {
        $this->bread = $name;
    }

}
