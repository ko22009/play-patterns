<?php

namespace PlayPatterns\Behavioral\Snapshot;

class User implements Creator
{

    private string $name;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getState(): array
    {
        return [
            'name' => $this->name
        ];
    }

    public function createSnapshot(): Snapshot
    {
        return new UserSnapshot($this);
    }

    public function setState($state)
    {
        foreach ($state as $key => $item) {
            if (property_exists($this, $key)) {
                $this->$key = $item;
            }
        }
    }

}
