<?php

namespace PlayPatterns\Principles\DependencyInversion;

class UpperText implements Upper, Text
{

    private string $text;

    public function getUpper()
    {
        return strtoupper($this->get());
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
