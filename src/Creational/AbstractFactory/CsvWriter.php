<?php

namespace PlayPatterns\Creational\AbstractFactory;

interface CsvWriter
{

    public function write(array $line): string;

}
