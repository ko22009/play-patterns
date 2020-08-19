<?php

namespace PlayPatterns\Principles\LiskovSubstitution;

class RectangleIncorrect
{

    protected int $width;
    protected int $height;

    public function setWidth(int $width)
    {
        if ($this instanceof SquareIncorrect) {
            $this->height = $width;
        }
        $this->width = $width;
    }

    public function setHeight(int $height)
    {
        if ($this instanceof SquareIncorrect) {
            $this->width = $height;
        }
        $this->height = $height;
    }

    public function getP(): int
    {
        return $this->width + $this->height;
    }

}
