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
        $emailSender->send('hello world');
    }

}
