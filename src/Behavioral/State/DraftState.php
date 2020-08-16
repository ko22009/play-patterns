<?php

namespace PlayPatterns\Behavioral\State;

class DraftState extends State
{

    public function publish()
    {
        $this->document->setState(new PublishState());
    }
}