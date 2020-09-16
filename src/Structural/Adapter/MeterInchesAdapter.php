<?php

namespace PlayPatterns\Structural\Adapter;

class MeterInchesAdapter extends AdapterAPI
{

    public function get()
    {
        return $this->api->get() / $this->k();
    }

}
