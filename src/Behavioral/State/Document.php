<?php

namespace PlayPatterns\Behavioral\State;

class Document
{

    protected State $state;

    public function __construct(State $state)
    {
        $this->setState($state);
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(State $state)
    {
        $this->state = $state;
        $this->state->setDocument($this);
    }

    public function publish()
    {
        $this->state->publish();
    }

}