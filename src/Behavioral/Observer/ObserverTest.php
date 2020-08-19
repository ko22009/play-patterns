<?php

namespace PlayPatterns\Behavioral\Observer;

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{

    public function testSubscribeAndPublish()
    {
        $publisher = new Publisher();
        $user = new User('Kate');
        $group = new Group('Main');
        $group->addUser($user);
        $subscriberUser = new SubscriberUser($user);
        $subscriberGroup = new SubscriberGroup($group);
        $publisher->addSubscriber($subscriberUser);
        $publisher->addSubscriber($subscriberGroup);

        $output = $publisher->notifySubscribers('test');

        $this->assertEquals([
            'Main' => ['Kate:test'],
            'Kate' => 'Kate:test'
        ], $output);
    }

}
