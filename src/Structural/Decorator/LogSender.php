<?php

namespace PlayPatterns\Structural\Decorator;

class LogSender extends BaseSender
{

    public function send($text)
    {
        $output = parent::send($text);
        return $output . 'log:' . $text . PHP_EOL;
    }

}
