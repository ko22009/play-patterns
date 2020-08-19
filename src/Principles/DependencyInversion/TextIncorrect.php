<?php

namespace PlayPatterns\Principles\DependencyInversion;

interface TextIncorrect
{

    public function setText($text);

    public function get();

    public function getLower();

    public function getUpper();

}
