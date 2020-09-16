<?php

namespace PlayPatterns\Creational\Builder;

abstract class Director
{

    protected IAnimalBuilder $builder;

    public function __construct(IAnimalBuilder $builder)
    {
        $this->changeBuilder($builder);
    }

    public function changeBuilder(IAnimalBuilder $builder)
    {
        $this->builder = $builder;
    }

    abstract public function make();

}
