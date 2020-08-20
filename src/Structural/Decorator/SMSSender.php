<?php

namespace PlayPatterns\Structural\Decorator;

class SMSSender extends BaseSender
{

    public function send($text)
    {
        $output = parent::send($text);
        return $output . 'sms:' . $text . PHP_EOL;
    }

}
