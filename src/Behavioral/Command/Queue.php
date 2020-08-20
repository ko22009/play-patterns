<?php

namespace PlayPatterns\Behavioral\Command;

class Queue
{

    /**
     * @var Command[] $commands
     */
    private array $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function add(Command $command)
    {
        $this->commands[] = $command;
    }

    public function run()
    {
        $result = [];
        foreach ($this->commands as $command) {
            $result[] = $command->execute();
        }
        return $result;
    }

    public function save()
    {
        return serialize($this->commands);
    }

    public function load($serializedCommands)
    {
        $this->commands = unserialize($serializedCommands);
    }

    public function unload()
    {
        $this->commands = [];
    }

}
