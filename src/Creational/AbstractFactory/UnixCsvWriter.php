<?php

namespace PlayPatterns\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }

}
