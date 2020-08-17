<?php

namespace PlayPatterns\Behavioral\Visitor;

interface Shape
{
    public function accept(Visitor $visitor);
}