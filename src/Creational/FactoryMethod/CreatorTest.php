<?php

namespace PlayPatterns\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;

class CreatorTest extends TestCase
{

    public function testShipCreatorCreateBox()
    {
        $shipCreator = new ShipCreator();
        $box = $shipCreator->getCase();
        $output = $box->put('Clock');
        $this->assertEquals('box:Clock', $output);
    }

    public function testBoatCreatorCreateContainer()
    {
        $boatCreator = new BoatCreator();
        $container = $boatCreator->getCase();
        $output = $container->put('Shirt');
        $this->assertEquals('container:Shirt', $output);
    }

}
