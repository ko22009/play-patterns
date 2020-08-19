<?php

namespace PlayPatterns\Behavioral\Observer;

class SubscriberUser implements Subscriber
{

    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function update($string)
    {
        return $this->user->getName() . ':' . $string;
    }

    public function getName()
    {
        return $this->user->getName();
    }

}
