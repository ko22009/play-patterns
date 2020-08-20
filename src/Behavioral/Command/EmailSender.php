<?php

namespace PlayPatterns\Behavioral\Command;

class EmailSender implements Sender
{

    public function send($from, $to, $text)
    {
        return 'email';
    }

}

