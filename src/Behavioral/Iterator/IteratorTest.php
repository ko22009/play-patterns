<?php

namespace PlayPatterns\Behavioral\Iterator;

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{

    private Collection $collection;

    public function setUp(): void
    {
        $this->collection = new Collection([
            [
                'id' => 3,
                'value' => 1,
                'text' => 'horse'
            ],
            [
                'id' => 2,
                'value' => 3,
                'text' => 'bob'
            ],
            [
                'id' => 1,
                'value' => 2,
                'text' => 'cent'
            ],
        ]);
    }

    public function testIteratorSortByIdNumber()
    {
        $iterator = $this->collection->createIterator('id:number');
        $elements = [];
        while ($item = $iterator->getNext()) {
            $elements[] = $item['id'];
        }
        $this->assertEquals([
            '1',
            '2',
            '3'
        ], $elements);
    }

    public function testIteratorSortByTextString()
    {
        $iterator = $this->collection->createIterator('text:string');
        $elements = [];
        while ($item = $iterator->getNext()) {
            $elements[] = $item['id'];
        }
        $this->assertEquals([
            '2',
            '1',
            '3'
        ], $elements);
    }

}