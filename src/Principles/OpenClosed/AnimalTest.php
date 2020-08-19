<?php

namespace PlayPatterns\Principles\OpenClosed;

use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{

    public function testAnimalSound()
    {
        /**
         * @var Animal[] $animals
         */
        $animals = [
            new Cat(),
            new Lion()
        ];
        $expected = [
            'mya',
            'rea'
        ];

        $actual = [];
        foreach ($animals as $animal) {
            $actual[] = $animal->getSound();
        }
        $this->assertEquals($expected, $actual);
    }

    public function testAnimalIncorrectSound()
    {
        /**
         * @var Animal[] $animals
         */
        $animals = [
            new Cat(),
            new Lion()
        ];
        $expected = [
            'mya',
            'rea'
        ];
        $sound = new SoundAnimalIncorrect();
        $actual = [];
        foreach ($animals as $animal) {
            $actual[] = $sound->getSound($animal);
        }
        $this->assertEquals($expected, $actual);
    }

}
