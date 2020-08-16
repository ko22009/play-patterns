<?php

namespace PlayPatterns\Another\Liskov;

use PHPUnit\Framework\TestCase;

class LiskovTest extends TestCase
{

    public function testRectangle()
    {
        $rectangle = new Rectangle();
        $rectangle->setHeight(2);
        $rectangle->setWidth(3);
        $this->assertEquals(5, $rectangle->getP());
    }

    public function testSquare()
    {
        $rectangle = new Square();
        $rectangle->setHeight(2);
        $rectangle->setWidth(2);
        $this->assertEquals(4, $rectangle->getP());
    }

    public function testSquareIncorrect()
    {
        $rectangle = new SquareIncorrect();
        $rectangle->setHeight(2);
        $rectangle->setWidth(3);
        $this->assertEquals(6, $rectangle->getP());
    }

}