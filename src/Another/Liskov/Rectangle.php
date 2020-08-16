<?php

namespace PlayPatterns\Another\Liskov;

class Rectangle
{

    private int $width;
    private int $height;

    public final function setWidth(int $width)
    {
        $this->width = $width;
    }

    public final function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function getP(): int
    {
        return $this->width + $this->height;
    }

}