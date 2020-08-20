<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

class Bus implements Parking
{

    public function park($destination)
    {
        return $destination . ':bus';
    }

}
