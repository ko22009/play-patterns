<?php

namespace PlayPatterns\Behavioral\Visitor;

interface Visitor
{
    public function visitSquare(Square $square);

    public function visitRectangle(Rectangle $rect);
}