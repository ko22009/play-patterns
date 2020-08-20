<?php

namespace PlayPatterns\Behavioral\Mediator;

class SwitchMediator implements Mediator
{

    private SwitchComponent $component1;
    private LightComponent $component2;

    public function __construct(SwitchComponent $component1, LightComponent $component2)
    {
        $this->component1 = $component1;
        $this->component1->setMediator($this);
        $this->component2 = $component2;
    }

    public function notify($sender, $event)
    {
        if ($event == "on") {
            $this->component2->light();
        }
        if ($event == "off") {
            $this->component2->dark();
        }
    }

}
