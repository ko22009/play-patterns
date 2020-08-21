<?php

namespace PlayPatterns\Creational\Singleton;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{

    public function testLoggerSingletonOnlyOne()
    {
        Logger::log('Started!');
        $log1 = Logger::getInstance();
        $log2 = Logger::getInstance();
        $this->assertSame($log1, $log2);
    }

    public function testConfigSingletonTheSameValue()
    {
        $config1 = Config::getInstance();
        $text = 'text';
        $config1->setValue('text', $text);
        $config2 = Config::getInstance();
        $this->assertEquals($config1->getValue('text'), $config2->getValue('text'));
    }

    public function testConfigNoTearDown()
    {
        $config = Config::getInstance();
        $this->assertEquals('text', $config->getValue('text'));
    }

    public function testConfigTearDown()
    {
        Config::tearDown();
        $config = Config::getInstance();
        $output = $config->getValue('text');
        $this->assertNull($output);
    }

    public function testConfigSingletonTheSameValueWithMock()
    {
        $config = $this->createMock(Config::class);
        $config->setValue('text', 'text');
        $config->method('getValue')->willReturn('text');
        $this->assertNotNull($config->getValue('text'));
    }

    public function testConfigSingletonValueIsNull()
    {
        $config = $this->createMock(Config::class);
        $this->assertNull($config->getValue('text'));
    }

}
