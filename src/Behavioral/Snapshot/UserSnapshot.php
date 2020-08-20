<?php

namespace PlayPatterns\Behavioral\Snapshot;

class UserSnapshot implements Snapshot
{

    private Creator $creator;
    private array $state;

    public function __construct(Creator $creator)
    {
        $this->creator = $creator;
        $this->state = $creator->getState();
    }

    public function restore()
    {
        $this->creator->setState($this->state);
    }

}
