<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

class Car implements Parking
{

    public function park($destination)
    {
        return $destination . ':car';
    }

}
