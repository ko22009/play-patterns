<?php

namespace PlayPatterns\Structural\Adapter;

class InchesAPI implements API
{

    private float $inch;

    public function __construct(float $inch)
    {
        $this->inch = $inch;
    }

    public function get()
    {
        return $this->inch;
    }

}
