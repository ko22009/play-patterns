<?php

namespace PlayPatterns\Creational\Builder;

class CatBuilder extends AnimalBuilder
{

    public function getModel()
    {
        return Cat::class;
    }

    public function setBread(string $name)
    {
        $this->animal->setBread('cat:' . $name);
    }

}
