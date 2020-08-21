<?php

namespace PlayPatterns\Creational\Prototype;

class Circle implements CirclePrototype
{

    private $r;
    private Color $color;

    public function __construct($r, $color)
    {
        $this->r = $r;
        $this->color = $color;
    }

    public function getR()
    {
        return $this->r;
    }

    public function clone(): CirclePrototype
    {
        return new Circle($this->r, $this->color->clone());
    }

    public function __clone()
    {
        $this->color = clone $this->color;
    }

    public function setColor($name)
    {
        $this->color->setColor($name);
    }

    public function getColor()
    {
        return $this->color->getColor();
    }

}
