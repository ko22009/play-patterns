<?php

namespace PlayPatterns\Creational\Builder;

interface Animal
{

    public function setBread(string $name);

    public function getBread();

    public function setOwner(string $name);

    public function setWeight(float $weight);

}
