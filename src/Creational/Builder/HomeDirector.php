<?php

namespace PlayPatterns\Creational\Builder;

class HomeDirector extends Director
{

    public function make()
    {
        $this->builder->setBread('Retriever');
        $this->builder->setWeight(20.3);
        $this->builder->setOwner('Kate');
    }

}
