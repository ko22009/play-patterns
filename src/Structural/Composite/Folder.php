<?php

namespace PlayPatterns\Structural\Composite;

class Folder extends Entity
{

    /**
     * @var Entity[] $entities
     */
    protected array $entities;

    public function __construct($title)
    {
        parent::__construct($title);
        $this->entities = [];
    }

    public function create(Entity $entity)
    {
        $this->entities[] = $entity;
    }

    public function delete(Entity $entity)
    {
        $this->entities = array_filter($this->entities, function ($row) use ($entity) {
            return $row !== $entity;
        });
    }

    public function getStructure(int $level = 0)
    {
        $output = str_repeat(' ', 2 * $level) . $this->getTitle() . PHP_EOL;
        $level++;
        foreach ($this->entities as $entity) {
            $output .= $entity->getStructure($level);
        }
        return $output;
    }

    public function getCurrentStructure()
    {
        $output = '';
        foreach ($this->entities as $entity) {
            $output .= $entity->getTitle() . PHP_EOL;
        }
        return $output;
    }

    public function open($name = '')
    {
        foreach ($this->entities as $entity) {
            if ($entity->getName() == $name) {
                return $entity->open('');
            }
        }
        return $name ? null : $this;
    }

    public function getTitle()
    {
        return parent::getTitle() . '\\';
    }

}
