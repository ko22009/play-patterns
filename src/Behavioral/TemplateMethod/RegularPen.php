<?php

namespace PlayPatterns\Behavioral\TemplateMethod;

class RegularPen extends Pen
{

    protected function buildHandle()
    {
        $this->handle = true;
    }

}