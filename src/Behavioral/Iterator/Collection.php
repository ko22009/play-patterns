<?php

namespace PlayPatterns\Behavioral\Iterator;

class Collection implements IterableCollection
{

    private array $collection;

    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    public function createIterator($prop): Iterator
    {
        return new IteratorCollection($this->collection, $prop);
    }

}