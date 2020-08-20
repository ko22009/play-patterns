<?php

namespace PlayPatterns\Structural\Decorator;

class EmailSender extends BaseSender
{

    public function send($text)
    {
        parent::send($text);
        echo 'email:' . $text . PHP_EOL;
    }

}
