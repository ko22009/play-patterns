<?php

namespace PlayPatterns\Structural\Decorator;

class LogSender extends BaseSender
{

    public function send($text)
    {
        parent::send($text);
        echo 'log:' . $text . PHP_EOL;
    }

}
