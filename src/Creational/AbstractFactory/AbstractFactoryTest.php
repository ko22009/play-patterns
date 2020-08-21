<?php

namespace PlayPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param WriterFactory $writerFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }

}
