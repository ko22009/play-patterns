<?php

namespace PlayPatterns\Principles\SingleResponsibility;

class Owner
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}
