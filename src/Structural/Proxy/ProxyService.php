<?php

namespace PlayPatterns\Structural\Proxy;

class ProxyService extends Service
{

    private Animal $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function execute()
    {
        if ($this->animal->getAccess()) {
            $service = new CatService();
            return $service->execute();
        }
        return (new Service())->execute();
    }

}
