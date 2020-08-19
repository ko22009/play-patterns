<?php

namespace PlayPatterns\Behavioral\Observer;

interface Subscriber
{

    public function update($string);

    public function getName();

}
