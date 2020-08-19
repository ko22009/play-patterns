<?php

namespace PlayPatterns\Principles\DependencyInversion;

class UpperTextIncorrect implements TextIncorrect
{

    private string $text;

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getLower()
    {
        return null;
    }

    public function getUpper()
    {
        return strtoupper($this->get());
    }

    public function get()
    {
        return $this->text;
    }

}
