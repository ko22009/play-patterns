<?php

namespace PlayPatterns\Structural\Proxy;

class Dog extends Animal
{

    public function getAccess()
    {
        return false;
    }

}
