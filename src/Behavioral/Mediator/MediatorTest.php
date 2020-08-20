<?php

namespace PlayPatterns\Behavioral\Mediator;

use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{

    public function testOnSwitchComponent()
    {
        $switchComponent = new SwitchComponent();
        $lightComponent = new LightComponent();
        new SwitchMediator($switchComponent, $lightComponent);
        $switchComponent->on();
        $this->assertTrue($lightComponent->getLight());
    }

}
