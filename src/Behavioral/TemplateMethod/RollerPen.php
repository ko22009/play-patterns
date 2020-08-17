<?php

namespace PlayPatterns\Behavioral\TemplateMethod;

class RollerPen extends Pen
{

    protected function setKernel(): string
    {
        parent::setKernel();
        return preg_replace('/:.*/', '', __METHOD__);
    }

    protected function buildHandle()
    {
        $this->handle = true;
        return preg_replace('/:.*/', '', __METHOD__);
    }

}