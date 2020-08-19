<?php

namespace PlayPatterns\Principles\InterfaceSegregation;

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
