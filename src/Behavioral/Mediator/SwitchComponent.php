<?php

namespace PlayPatterns\Behavioral\Mediator;

class SwitchComponent extends BaseComponent
{

    public function on()
    {
        return $this->mediator->notify($this, 'on');
    }

    public function off()
    {
        return $this->mediator->notify($this, 'off');
    }

}
