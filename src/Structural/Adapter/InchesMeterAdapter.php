<?php

namespace PlayPatterns\Structural\Adapter;

class InchesMeterAdapter extends AdapterAPI
{

    public function get()
    {
        return $this->api->get() * $this->k();
    }

}
