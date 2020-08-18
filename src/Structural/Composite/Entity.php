<?php

namespace PlayPatterns\Structural\Composite;

abstract class Entity
{

    /**
     * @var Entity[] $entities
     */
    protected array $entities;
    private string $title;

    public function __construct($title)
    {
        $this->title = $title;
        $this->entities = [];
    }

    public function getStructure(int $level = 0)
    {
        $separator = get_class($this) == Folder::class ? '\\' : '';
        $output = str_repeat(' ', 2 * $level) . $this->getTitle() . $separator . PHP_EOL;
        $level++;
        foreach ($this->entities as $entity) {
            $output .= $entity->getStructure($level);
        }
        return $output;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCurrentStructure()
    {
        $output = [];
        foreach ($this->entities as $entity) {
            $output[] = $entity->getTitle();
        }
        return $output;
    }

    public function create(Entity $entity)
    {
    }

    public function delete(Entity $entity)
    {
    }

    /**
     * @param string $name
     * @return mixed|Entity|null
     */
    public function open($name)
    {
        foreach ($this->entities as $entity) {
            if ($entity->getTitle() == $name) {
                return $entity instanceof File ? $entity->getContent() : $entity;
            }
        }
        return null;
    }

    public function getContent()
    {
        return '';
    }

}
