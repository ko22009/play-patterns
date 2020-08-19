<?php

namespace PlayPatterns\Principles\InterfaceSegregation;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{

    public function testUpperIncorrect()
    {
        $upper = new UpperTextIncorrect();
        $upper->setText('test');
        $this->assertEquals('TEST', $upper->getUpper());
    }

    public function testUpperIncorrectLower()
    {
        $upper = new UpperTextIncorrect();
        $upper->setText('test');
        $this->assertEquals(null, $upper->getLower());
    }

    public function testUpper()
    {
        $upper = new UpperText();
        $upper->setText('test');
        $this->assertEquals('TEST', $upper->getUpper());
    }

    public function testLowerIncorrect()
    {
        $upper = new LowerTextIncorrect();
        $upper->setText('TeST');
        $this->assertEquals('test', $upper->getLower());
    }

    public function testLower()
    {
        $upper = new LowerText();
        $upper->setText('TeST');
        $this->assertEquals('test', $upper->getLower());
    }

}
