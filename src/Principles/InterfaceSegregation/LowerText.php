<?php

namespace PlayPatterns\Principles\InterfaceSegregation;

class LowerText implements Lower, Text
{

    private string $text;

    public function getLower()
    {
        return strtolower($this->get());
    }

    public function get()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

}
