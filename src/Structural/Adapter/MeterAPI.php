<?php

namespace PlayPatterns\Structural\Adapter;

class MeterAPI implements API
{

    private $meter;

    public function __construct($meter)
    {
        $this->meter = $meter;
    }

    public function get()
    {
        return $this->meter;
    }

}
