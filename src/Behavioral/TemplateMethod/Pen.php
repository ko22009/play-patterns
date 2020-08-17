<?php

namespace PlayPatterns\Behavioral\TemplateMethod;

abstract class Pen
{

    protected bool $kernel;
    protected bool $handle;
    private bool $sticker;
    private string $kernelFromCalling;

    public function __construct()
    {
        $this->kernel = false;
        $this->sticker = false;
        $this->handle = false;
        $this->kernelFromCalling = '';
    }

    /**
     * Template method
     */
    public final function make()
    {
        $this->buildHandle();
        $this->kernelFromCalling = $this->setKernel();
        $this->setSticker();
    }

    protected abstract function buildHandle();

    /**
     * Set the same sticker to the pan
     */
    private function setSticker()
    {
        $this->sticker = true;
    }

    public function getKernelFromCalling()
    {
        return $this->kernelFromCalling;
    }

    public function getHandle()
    {
        return $this->handle;
    }

    public function getKernel()
    {
        return $this->kernel;
    }

    /**
     * set default kernel
     */
    protected function setKernel(): string
    {
        $this->kernel = true;
        return preg_replace('/:.*/', '', __METHOD__);
    }

    public function getSticker()
    {
        return $this->sticker;
    }

}