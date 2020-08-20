<?php

namespace PlayPatterns\Structural\Facade;

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    public function testEatBasicLogic()
    {
        $animal = new Animal('bird');
        $snake = new Food('snake', 200);
        $worm = new Food('worm', 300);
        $animal->eatFood($snake);
        $animal->eatFood($worm);
        $this->assertEquals(500, $animal->getWeight());
    }

    public function testEatByFacade()
    {
        $animalFacade = new AnimalFacade('bird', [
            [
                'snake',
                200
            ],
            [
                'worm',
                300
            ],
        ]);
        $this->assertEquals(500, $animalFacade->getWeight());
    }

}
