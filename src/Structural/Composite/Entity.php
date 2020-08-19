<?php

namespace PlayPatterns\Structural\Composite;

abstract class Entity
{

    private string $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getName()
    {
        return $this->title;
    }

    /**
     * @param string $name
     * @return Entity|string|null
     */
    abstract public function open($name = '');

    public function getStructure(int $level = 0)
    {
        return str_repeat(' ', 2 * $level) . $this->getTitle() . PHP_EOL;
    }

    public function getCurrentStructure()
    {
        return null;
    }

}
