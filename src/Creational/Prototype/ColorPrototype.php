<?php

namespace PlayPatterns\Creational\Prototype;

interface ColorPrototype extends Prototype
{

    public function setColor($name);

    public function getColor();

}
