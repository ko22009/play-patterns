<?php

namespace PlayPatterns\Creational\Builder;

class Type
{

    private string $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public static function street()
    {
        return 'street';
    }

    public static function home()
    {
        return 'home';
    }

    public function getType(): string
    {
        return $this->type;
    }

}
