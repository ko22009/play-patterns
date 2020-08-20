<?php

namespace PlayPatterns\Behavioral\Command;

class CommandReport implements Command
{

    private string $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function execute()
    {
        return (new Report())->send($this->text);
    }

}
