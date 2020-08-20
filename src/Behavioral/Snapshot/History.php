<?php

namespace PlayPatterns\Behavioral\Snapshot;

class History
{

    /**
     * @var Snapshot[]
     */
    private array $histories;
    private Creator $creator;

    public function __construct(Creator $creator)
    {
        $this->creator = $creator;
    }

    public function undo()
    {
        $history = array_pop($this->histories);
        if ($history) $history->restore();
    }

    public function backup()
    {
        $this->histories[] = $this->creator->createSnapshot();
    }

}
