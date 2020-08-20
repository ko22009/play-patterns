<?php

namespace PlayPatterns\Structural\Facade;

class AnimalFacade
{

    private $animal;

    /**
     * AnimalFacade constructor.
     * @param $title
     * @param array $food
     */
    public function __construct($title, array $food)
    {
        $this->animal = new Animal($title);
        foreach ($food as $item) {
            $this->animal->eatFood(new Food(...$item));
        }
    }

    public function getWeight()
    {
        return $this->animal->getWeight();
    }

}
