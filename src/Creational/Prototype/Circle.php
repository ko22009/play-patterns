<?php

namespace PlayPatterns\Creational\Prototype;

class Circle implements CirclePrototype
{

    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getR()
    {
        return $this->r;
    }

    public function clone(): CirclePrototype
    {
        return new Circle($this->r);
    }

}
