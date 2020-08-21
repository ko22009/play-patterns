<?php

namespace PlayPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{

    public function testCloneCircle()
    {
        $circle = new Circle(2);
        $newCircle = $circle->clone();
        $this->assertTrue($circle !== $newCircle && $circle->getR() == $newCircle->getR());
    }

}
