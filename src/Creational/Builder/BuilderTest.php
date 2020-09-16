<?php

namespace PlayPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

    public function testCatBuilder()
    {
        $catBuilder = new CatBuilder();
        $director = DirectorBuilder::getType($catBuilder, new Type(Type::home()));
        $director->make();
        $cat = $catBuilder->getResult();
        $this->assertEquals('cat:Retriever', $cat->getBread());
    }

    public function testDogBuilderTheSameProperty()
    {
        $dogBuilder = new DogBuilder();
        $director = DirectorBuilder::getType($dogBuilder, new Type(Type::street()));

        $director->make();
        $dog = $dogBuilder->getResult();

        $newDog = new Dog();
        $newDog->setBread('none');

        $this->assertEquals($newDog->getBread(), $dog->getBread());
    }

}
