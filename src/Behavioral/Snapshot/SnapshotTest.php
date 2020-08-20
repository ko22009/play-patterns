<?php

namespace PlayPatterns\Behavioral\Snapshot;

use PHPUnit\Framework\TestCase;

class SnapshotTest extends TestCase
{

    public function testUndoChangesHistory()
    {
        $user = new User('Kate');
        $userHistory = new History($user);
        $userHistory->backup();
        $user->setName('Denis');
        $userHistory->undo();
        $this->assertEquals('Kate', $user->getName());
    }

}
