<?php

namespace PlayPatterns\Behavioral\Mediator;

interface Mediator
{

    public function notify($sender, $event);

}
