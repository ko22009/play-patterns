<?php

namespace PlayPatterns\Structural\Facade;

class Food
{

    private $title;
    private $weight;

    public function __construct($title, $weight)
    {
        $this->title = $title;
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

}
