<?php

namespace PlayPatterns\Structural\Decorator;

abstract class BaseSender implements Sender
{

    /**
     * @var Sender|null
     */
    protected $sender;

    public function __construct(Sender $sender = null)
    {
        $this->sender = $sender;
    }

    public function send($text)
    {
        if ($this->sender) return $this->sender->send($text);
        return '';
    }

}
