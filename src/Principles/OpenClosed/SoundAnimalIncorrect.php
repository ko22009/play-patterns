<?php

namespace PlayPatterns\Principles\OpenClosed;

class SoundAnimalIncorrect
{

    public function getSound(Animal $animal)
    {
        if ($animal instanceof Cat) {
            return 'mya';
        }
        else if ($animal instanceof Lion) {
            return 'rea';
        }
        return '';
    }

}
