<?php

namespace PlayPatterns\Structural\Adapter;

abstract class AdapterAPI implements API
{

    protected API $api;

    public function __construct(API $api)
    {
        $this->api = $api;
    }

    protected function k()
    {
        return 0.0254;
    }

}
