<?php

namespace PlayPatterns\Behavioral\Strategy;

class StrategyPowDouble implements Strategy
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function execute()
    {
        return $this->number * $this->number;
    }
}