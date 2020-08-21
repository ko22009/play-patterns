<?php

namespace PlayPatterns\Creational\FactoryMethod;

class Box implements InCase
{

    public function put(string $thing)
    {
        return 'box:' . $thing;
    }

}
