<?php

namespace PlayPatterns\Behavioral\Iterator;

interface IterableCollection
{

    public function createIterator(string $prop): Iterator;

}