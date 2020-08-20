<?php

namespace PlayPatterns\Structural\Bridge;

class Circle
{

    private Color $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color->get();
    }

}
