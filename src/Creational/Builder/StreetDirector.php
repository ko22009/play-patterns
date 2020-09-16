<?php

namespace PlayPatterns\Creational\Builder;

class StreetDirector extends Director
{

    public function make()
    {
        $this->builder->setBread('none');
    }

}
