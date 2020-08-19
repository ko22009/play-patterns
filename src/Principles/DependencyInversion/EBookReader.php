<?php

namespace PlayPatterns\Principles\DependencyInversion;

class EBookReader
{

    private $book;

    function __construct(EBook $book)
    {
        $this->book = $book;
    }

    function read()
    {
        return $this->book->read();
    }

}
