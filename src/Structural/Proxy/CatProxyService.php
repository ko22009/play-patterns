<?php

namespace PlayPatterns\Structural\Proxy;

class CatProxyService implements Service
{

    private $animal;
    private CatService $catService;

    public function __construct($animal)
    {
        $this->animal = $animal;
        $this->catService = new CatService();
    }

    public function execute()
    {
        if ($this->animal instanceof Cat) {
            return $this->catService->execute();
        }
        return null;
    }

}
