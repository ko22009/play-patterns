<?php

namespace PlayPatterns\Behavioral\Visitor;

class Square implements Shape
{

    private float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function getR()
    {
        return $this->r;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitSquare($this);
    }

}