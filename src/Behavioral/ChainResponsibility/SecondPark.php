<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

class SecondPark extends BaseHandler
{

    public function handle(Parking $request)
    {
        if ($this->free) {
            $this->free--;
            return $request->park('SecondPark');
        }
        else {
            return parent::handle($request);
        }
    }

}
