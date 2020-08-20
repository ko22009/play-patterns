<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

interface Handler
{

    public function setNext(Handler $handler): Handler;

    public function handle(Parking $request);

}
