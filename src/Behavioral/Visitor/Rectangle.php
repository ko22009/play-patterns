<?php

namespace PlayPatterns\Behavioral\Visitor;

class Rectangle implements Shape
{

    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitRectangle($this);
    }

}