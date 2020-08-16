<?php declare(strict_types=1);

namespace PlayPatterns\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    protected Context $context;

    protected function setUp(): void
    {
        $this->context = new Context();
    }

    public function testSetContext()
    {
        $strategyA = new StrategyPowDouble(2);
        $this->context->set($strategyA);
        $this->assertEquals($strategyA, $this->context->get());
    }

    public function testRunContext()
    {
        $strategyA = new StrategyPowDouble(2);
        $this->context->set($strategyA);
        $output = $this->context->execute();
        $this->assertEquals('4', $output);
    }

    public function testChangeAndRunContext()
    {
        $strategyA = new StrategyPowDouble(2);
        $this->context->set($strategyA);
        $strategyB = new StrategyPlus(4, 4);
        $this->context->set($strategyB);
        $output = $this->context->execute();
        $this->assertEquals('8', $output);
    }
}
