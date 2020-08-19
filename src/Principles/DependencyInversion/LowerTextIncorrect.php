<?php

namespace PlayPatterns\Principles\DependencyInversion;

class LowerTextIncorrect implements TextIncorrect
{

    private string $text;

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getLower()
    {
        return strtolower($this->get());
    }

    public function get()
    {
        return $this->text;
    }

    public function getUpper()
    {
        return null;
    }

}
