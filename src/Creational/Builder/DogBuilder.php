<?php

namespace PlayPatterns\Creational\Builder;

class DogBuilder extends AnimalBuilder
{

    public function getModel()
    {
        return Dog::class;
    }

}
