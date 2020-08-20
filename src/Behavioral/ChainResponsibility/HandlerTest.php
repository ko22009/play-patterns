<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

use PHPUnit\Framework\TestCase;

class HandlerTest extends TestCase
{

    public function testHandleStayInSecondPark()
    {
        $bus = new Bus();
        $firstPark = new FirstPark(0);
        $secondPark = new SecondPark(1);
        $firstPark->setNext($secondPark);
        $output = $firstPark->handle($bus);
        $this->assertEquals('SecondPark:bus', $output);
    }

    public function testHandleIsNullWhenNoFree()
    {
        $bus = new Bus();
        $firstPark = new FirstPark(0);
        $secondPark = new SecondPark(0);
        $firstPark->setNext($secondPark);
        $output = $secondPark->handle($bus);
        $this->assertEquals(null, $output);
    }

}
