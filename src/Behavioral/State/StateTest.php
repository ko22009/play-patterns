<?php declare(strict_types=1);

namespace PlayPatterns\Behavioral\State;

use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{

    public function testDraftStatePublished()
    {
        $document = new Document(new DraftState());
        $document->publish();
        $this->assertEquals(PublishState::class, get_class($document->getState()));
    }

    public function testPublishStateIsEndState()
    {
        $document = new Document(new PublishState());
        $document->publish();
        $this->assertEquals(PublishState::class, get_class($document->getState()));
    }

}