<?php

namespace PlayPatterns\Creational\Builder;

class Director
{

    const TYPE_STREET = 'street';
    const TYPE_HOME = 'home';

    private IAnimalBuilder $builder;

    public function __construct(IAnimalBuilder $builder)
    {
        $this->changeBuilder($builder);
    }

    public function changeBuilder(IAnimalBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function make($type)
    {
        $this->builder->reset();
        if ($type == self::TYPE_STREET) {
            $this->builder->setBread('none');
        }
        else if ($type == self::TYPE_HOME) {
            $this->builder->setBread('Retriever');
            $this->builder->setWeight(20.3);
            $this->builder->setOwner('Kate');
        }
    }

}
