<?php

namespace PlayPatterns\Structural\Adapter;

class AdapterAPI implements API
{

    private API $api;

    public function __construct(API $api)
    {
        $this->api = $api;
    }

    public function get()
    {
        $k = 0.0254;
        if ($this->api instanceof MeterAPI) {
            $k = 1 / $k;
        }
        return $this->api->get() * $k;
    }

}
