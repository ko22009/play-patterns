<?php

namespace PlayPatterns\Structural\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{

    public function testCatProxyCatAvailable()
    {
        $catService = new CatService();
        $catProxyService = new CatProxyService(new Cat(), $catService);
        $output = $catProxyService->execute();
        $this->assertEquals('mya', $output);
    }

    public function testCatProxyDogDenied()
    {
        $catService = new CatService();
        $catProxyService = new CatProxyService(new Dog(), $catService);
        $output = $catProxyService->execute();
        $this->assertEquals(null, $output);
    }

}
