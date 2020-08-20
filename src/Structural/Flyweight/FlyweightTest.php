<?php

namespace PlayPatterns\Structural\Flyweight;

use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{

    public function testMakeModelCarFactoryAddNoExistModelCar()
    {
        $initialAutoModel = $this->getInitialAutoModel();
        $makeModelCarFactory = new MakeModelCarFactory($initialAutoModel);

        $databasePolice = new DatabasePolice();
        $databasePolice->add($makeModelCarFactory, "CL234IR", "James Doe", "BMW", "M5", "red");
        $databasePolice->add($makeModelCarFactory, "CL234IR", "James Doe", "BMW", "X1", "red");

        $this->assertEquals(array_merge($initialAutoModel, [
            [
                "BMW",
                "X1",
                "red"
            ]
        ]), $makeModelCarFactory->list());
    }

    public function getInitialAutoModel()
    {
        return [
            [
                "Chevrolet",
                "Camaro2018",
                "pink"
            ],
            [
                "Mercedes Benz",
                "C300",
                "black"
            ],
            [
                "Mercedes Benz",
                "C500",
                "red"
            ],
            [
                "BMW",
                "M5",
                "red"
            ],
            [
                "BMW",
                "X6",
                "white"
            ],
        ];
    }

}
