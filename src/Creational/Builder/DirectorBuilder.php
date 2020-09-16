<?php

namespace PlayPatterns\Creational\Builder;

class DirectorBuilder
{

    public static function getType(IAnimalBuilder $builder, Type $type)
    {
        switch ($type->getType()) {
            case Type::home():
                return new HomeDirector($builder);
                break;
            case Type::street():
                return new StreetDirector($builder);
                break;
        }
        return new NullDirector($builder);
    }

}
