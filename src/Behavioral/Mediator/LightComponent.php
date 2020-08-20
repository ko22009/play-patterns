<?php

namespace PlayPatterns\Behavioral\Mediator;

class LightComponent
{

    private bool $light;

    public function getLight()
    {
        return $this->light;
    }

    public function getDark()
    {
        return !$this->light;
    }

    public function light()
    {
        $this->light = true;
    }

    public function dark()
    {
        $this->light = false;
    }

}
