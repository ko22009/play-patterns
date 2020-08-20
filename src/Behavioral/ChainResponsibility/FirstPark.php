<?php

namespace PlayPatterns\Behavioral\ChainResponsibility;

class FirstPark extends BaseHandler
{

    public function handle(Parking $request)
    {
        if ($this->free) {
            $this->free--;
            return $request->park('FirstPark');
        }
        else {
            return parent::handle($request);
        }
    }

}
