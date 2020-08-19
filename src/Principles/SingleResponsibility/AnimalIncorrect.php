<?php

namespace PlayPatterns\Principles\SingleResponsibility;

class AnimalIncorrect
{

    private string $name;
    private string $owner;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setOwner(string $name)
    {
        $this->owner = $name;
    }

}
