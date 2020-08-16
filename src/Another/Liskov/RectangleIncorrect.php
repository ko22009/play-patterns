<?php

namespace PlayPatterns\Another\Liskov;

class RectangleIncorrect
{

    protected int $width;
    protected int $height;

    public function setWidth(int $width)
    {
        $this->width = $width;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function getP(): int
    {
        return $this->width + $this->height;
    }

}