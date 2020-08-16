<?php declare(strict_types=1);

namespace PlayPatterns\Behavioral\Strategy;

class Context
{
    private Strategy $context;

    public function set($strategy) {
        $this->context = $strategy;
    }

    public function get(): Strategy
    {
        return $this->context;
    }

    public function execute() {
        return $this->context->execute();
    }
}
