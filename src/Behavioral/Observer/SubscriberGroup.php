<?php

namespace PlayPatterns\Behavioral\Observer;

class SubscriberGroup implements Subscriber
{

    private Group $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function getName()
    {
        return $this->group->getName();
    }

    public function update($string)
    {
        $users = [];
        foreach ($this->group->getUsers() as $user) {
            $users[] = (new SubscriberUser($user))->update($string);
        }
        return $users;
    }

}
