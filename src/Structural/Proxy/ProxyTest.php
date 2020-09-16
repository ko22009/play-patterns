<?php

namespace PlayPatterns\Structural\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{

    public function testCatProxyCatAvailable()
    {
        $proxyService = new ProxyService(new Cat());
        $output = $proxyService->execute();
        $this->assertEquals('mya', $output);
    }

    public function testCatProxyDogDenied()
    {
        $proxyService = new ProxyService(new Dog());
        $output = $proxyService->execute();
        $this->assertEquals('not realize', $output);
    }

}
