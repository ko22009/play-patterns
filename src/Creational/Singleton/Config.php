<?php

namespace PlayPatterns\Creational\Singleton;

class Config extends Singleton
{

    private $hashmap = [];

    public function getValue(string $key)
    {
        return $this->hashmap[$key] ?? null;
    }

    public function setValue(string $key, string $value)
    {
        $this->hashmap[$key] = $value;
    }

}
