<?php

namespace PlayPatterns\Structural\Composite;

class File extends Entity
{
    private string $content;

    public function __construct($title, $content)
    {
        parent::__construct($title);
        $this->content = $content;
    }

    public function open($name = ''): string
    {
        return $this->content;
    }

}
