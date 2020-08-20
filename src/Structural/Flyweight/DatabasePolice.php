<?php

namespace PlayPatterns\Structural\Flyweight;

class DatabasePolice
{

    /**
     * @var Car[] $database
     */
    private array $database;

    public function __construct()
    {
        $this->database = [];
    }

    public function add(MakeModelCarFactory $factory, $plates, $owner, $brand, $model, $color)
    {
        $makeModelCar = $factory->getFlyweight([
            $brand,
            $model,
            $color
        ]);
        $car = new Car($makeModelCar, $plates, $owner);
        $this->database[] = $car;
    }

}
