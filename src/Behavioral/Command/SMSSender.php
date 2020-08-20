<?php

namespace PlayPatterns\Behavioral\Command;

class SMSSender implements Sender
{

    public function send($from, $to, $text)
    {
        return 'sms';
    }

}
