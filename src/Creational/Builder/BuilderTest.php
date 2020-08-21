<?php

namespace PlayPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testCatBuilder()
    {
        $catBuilder = new CatBuilder();
        $director = new Director($catBuilder);
        $director->make(Director::TYPE_HOME);
        $cat = $catBuilder->getResult();
        $this->assertEquals('cat:Retriever', $cat->getBread());
    }

    public function testDogBuilderTheSameProperty()
    {
        $dogBuilder = new DogBuilder();
        $director = new Director($dogBuilder);

        $director->make(Director::TYPE_STREET);
        $dog = $dogBuilder->getResult();

        $newDog = new Dog();
        $newDog->setBread('none');

        $this->assertEquals($newDog->getBread(), $dog->getBread());
    }

}
