<?php

namespace PlayPatterns\Structural\Bridge;

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{

    public function testBlueColorInCircle()
    {
        $color = new BlueColor();
        $circle = new Circle($color);
        $this->assertEquals($color->get(), $circle->getColor());
    }

    public function testRedColorInCircle()
    {
        $color = new RedColor();
        $circle = new Circle($color);
        $this->assertEquals($color->get(), $circle->getColor());
    }

}
