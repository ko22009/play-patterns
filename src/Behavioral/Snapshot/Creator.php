<?php

namespace PlayPatterns\Behavioral\Snapshot;

interface Creator
{

    public function createSnapshot(): Snapshot;

    public function setState($state);

    public function getState(): array;

}
