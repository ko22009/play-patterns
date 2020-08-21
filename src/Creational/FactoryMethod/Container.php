<?php

namespace PlayPatterns\Creational\FactoryMethod;

class Container implements InCase
{

    public function put(string $thing)
    {
        return 'container:' . $thing;
    }

}
