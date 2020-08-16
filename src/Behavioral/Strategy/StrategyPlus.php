<?php

namespace PlayPatterns\Behavioral\Strategy;

class StrategyPlus implements Strategy
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function execute()
    {
        return $this->a + $this->b;
    }
}