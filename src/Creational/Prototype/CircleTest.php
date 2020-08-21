<?php

namespace PlayPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{

    public function testCloneCircleByMethod()
    {
        $circle = new Circle(2, new Color('red'));
        $newCircle = $circle->clone();
        $newCircle->setColor('blue');
        $diffColor = $circle->getColor() != $newCircle->getColor();
        $theSameR = $circle->getR() == $newCircle->getR();
        $this->assertTrue($circle !== $newCircle && $theSameR && $diffColor);
    }

    public function testCloneCircleByCloneConstructor()
    {
        $circle = new Circle(2, new Color('red'));
        $newCircle = clone $circle;
        $newCircle->setColor('blue');
        $diffColor = $circle->getColor() != $newCircle->getColor();
        $theSameR = $circle->getR() == $newCircle->getR();
        $this->assertTrue($circle !== $newCircle && $theSameR && $diffColor);
    }

}
