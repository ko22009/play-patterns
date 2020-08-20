<?php

namespace PlayPatterns\Behavioral\Command;

interface Sender
{

    public function send($from, $to, $text);

}
