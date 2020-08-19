<?php

namespace PlayPatterns\Behavioral\Observer;

class Publisher
{

    /**
     * @var Subscriber[] $subscribers
     */
    private $subscribers;

    public function addSubscriber(Subscriber $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    public function notifySubscribers($string)
    {
        $output = [];
        foreach ($this->subscribers as $subscriber) {
            $output[$subscriber->getName()] = $subscriber->update($string);
        }
        return $output;
    }

}
