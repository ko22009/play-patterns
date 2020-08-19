<?php

namespace PlayPatterns\Principles\SingleResponsibility;

use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{

    public function testAssignOwnerToAnimal()
    {
        $owner = new Owner('Kate');
        $animal = new Animal('Max');
        $animal->setOwner($owner);
        $this->assertEquals($owner, $animal->getOwner());
    }

}
