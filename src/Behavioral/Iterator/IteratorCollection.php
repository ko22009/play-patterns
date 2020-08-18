<?php

namespace PlayPatterns\Behavioral\Iterator;

class IteratorCollection implements Iterator
{

    private int $currentPosition;
    private array $collection;

    public function __construct(array $collection, string $prop)
    {
        $this->collection = $collection;
        preg_match('/(.*)(?::)(.*)/', $prop, $matches);
        $name = $matches[1];
        $type = $matches[2];
        $compare = null;
        $this->currentPosition = 0;

        if ($type == 'number') $compare = fn($a, $b) => $a[$name] - $b[$name];
        else if ($type == 'string') $compare = fn($a, $b) => strcmp($a[$name], $b[$name]);
        if ($compare) usort($this->collection, $compare);
    }

    public function getNext()
    {
        return $this->collection[$this->currentPosition++] ?? null;
    }

}