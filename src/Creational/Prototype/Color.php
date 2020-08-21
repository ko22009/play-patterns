<?php

namespace PlayPatterns\Creational\Prototype;

class Color implements ColorPrototype
{

    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function clone(): Prototype
    {
        return new Color($this->color);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($name)
    {
        $this->color = $name;
    }

}
