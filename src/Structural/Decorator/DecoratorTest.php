<?php

namespace PlayPatterns\Structural\Decorator;

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{

    public function testDecorator()
    {
        $logSender = new LogSender();
        $smsSender = new SMSSender($logSender);
        $emailSender = new EmailSender($smsSender);
        $output = $emailSender->send('hello world');
        $expected = 'log:hello world' . PHP_EOL . 'sms:hello world' . PHP_EOL . 'email:hello world' . PHP_EOL;
        $this->assertEquals($expected, $output);
    }

}
