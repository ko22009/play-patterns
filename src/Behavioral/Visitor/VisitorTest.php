<?php

namespace PlayPatterns\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{

    public function testVisitorAreaForRectangle()
    {
        $visitor = new VisitorArea();
        $rect = new Rectangle(2, 4);
        $this->assertEquals(8, $rect->accept($visitor));
    }

    public function testVisitorAreaForSquare()
    {
        $visitor = new VisitorArea();
        $square = new Square(2.5);
        $this->assertEquals(19.63, $square->accept($visitor));
    }

    public function testVisitorPerimetrForRectangle()
    {
        $visitor = new VisitorPerimetr();
        $rect = new Rectangle(2, 4);
        $this->assertEquals(6, $rect->accept($visitor));
    }

    public function testVisitorPerimetrForSquare()
    {
        $visitor = new VisitorPerimetr();
        $square = new Square(2.5);
        $this->assertEquals(15.71, $square->accept($visitor));
    }

}