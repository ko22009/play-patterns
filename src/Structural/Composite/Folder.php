<?php

namespace PlayPatterns\Structural\Composite;

class Folder extends Entity
{

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

}
