<?php

namespace PlayPatterns\Structural\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{

    public function testCatProxyCatAvailable()
    {
        $catProxyService = new CatProxyService(new Cat());
        $output = $catProxyService->execute();
        $this->assertEquals('mya', $output);
    }

    public function testCatProxyDogDenied()
    {
        $catProxyService = new CatProxyService(new Dog());
        $output = $catProxyService->execute();
        $this->assertEquals(null, $output);
    }

}
