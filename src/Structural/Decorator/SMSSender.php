<?php

namespace PlayPatterns\Structural\Decorator;

class SMSSender extends BaseSender
{

    public function send($text)
    {
        parent::send($text);
        echo 'sms:' . $text . PHP_EOL;
    }

}
