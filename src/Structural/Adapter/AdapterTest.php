<?php

namespace PlayPatterns\Structural\Adapter;

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    public function testAdapterAPIInchesToMeter()
    {
        $inchesAPI = new InchesAPI(1);
        $apiAdapter = new InchesMeterAdapter($inchesAPI);
        $meters = $apiAdapter->get();
        $meterAPI = new MeterAPI($meters);
        $this->assertSame(0.0254, $meterAPI->get());
    }

    public function testAdapterAPIMeterToInches()
    {
        $meterAPI = new MeterAPI(0.0254);
        $apiAdapter = new MeterInchesAdapter($meterAPI);
        $inches = $apiAdapter->get();
        $inchesAPI = new InchesAPI($inches);
        $this->assertSame(1.0, $inchesAPI->get());
    }

}
