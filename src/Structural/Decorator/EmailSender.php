<?php

namespace PlayPatterns\Structural\Decorator;

class EmailSender extends BaseSender
{

    public function send($text)
    {
        $output = parent::send($text);
        return $output . 'email:' . $text . PHP_EOL;
    }

}
