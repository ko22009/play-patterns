<?php

namespace PlayPatterns\Structural\Composite;

class File extends Entity
{
    private $content;

    public function __construct($title, $content)
    {
        parent::__construct($title);
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

}
