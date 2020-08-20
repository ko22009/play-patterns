<?php

namespace PlayPatterns\Structural\Flyweight;

class MakeModelCarFactory
{

    /**
     * @var MakeModelCar[]
     */
    private array $flyweights = [];

    public function __construct(array $initialFlyweights)
    {
        foreach ($initialFlyweights as $state) {
            $this->flyweights[$this->getKey($state)] = new MakeModelCar($state);
        }
    }

    private function getKey(array $state): string
    {
        ksort($state);

        return implode("_", $state);
    }

    public function getFlyweight(array $sharedState): MakeModelCar
    {
        $key = $this->getKey($sharedState);

        if (!isset($this->flyweights[$key])) {
            $this->flyweights[$key] = new MakeModelCar($sharedState);
        }

        return $this->flyweights[$key];
    }

    public function list()
    {
        $list = [];
        foreach ($this->flyweights as $flyweight) {
            $list[] = $flyweight->getSharedState();
        }
        return $list;
    }

}
