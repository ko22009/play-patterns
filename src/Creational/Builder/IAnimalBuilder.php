<?php

namespace PlayPatterns\Creational\Builder;

interface IAnimalBuilder extends Animal
{

    public function reset();

    public function getResult();

}
