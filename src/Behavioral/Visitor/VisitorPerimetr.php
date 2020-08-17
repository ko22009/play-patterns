<?php

namespace PlayPatterns\Behavioral\Visitor;

class VisitorPerimetr implements Visitor
{

    public function visitSquare(Square $square)
    {
        return round(2 * pi() * $square->getR(), 2);
    }

    public function visitRectangle(Rectangle $rect)
    {
        return $rect->getA() + $rect->getB();
    }

}