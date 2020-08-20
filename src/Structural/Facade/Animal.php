<?php

namespace PlayPatterns\Structural\Facade;

class Animal
{

    private $title;
    /**
     * @var Food[] $food
     */
    private $food;
    private $weight;

    public function __construct($title)
    {
        $this->title = $title;
        $this->food = [];
        $this->weight = 0;
    }

    public function eatFood(Food $food)
    {
        $this->food[] = $food;
        $this->weight += $food->getWeight();
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

}
