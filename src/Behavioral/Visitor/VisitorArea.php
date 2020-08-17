<?php

namespace PlayPatterns\Behavioral\Visitor;

class VisitorArea implements Visitor
{

    public function visitSquare(Square $square)
    {
        return round(pi() * $square->getR() * $square->getR(), 2);
    }

    public function visitRectangle(Rectangle $rect)
    {
        return $rect->getA() * $rect->getB();
    }

}