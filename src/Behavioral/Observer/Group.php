<?php

namespace PlayPatterns\Behavioral\Observer;

class Group
{

    /**
     * @var User[] $users
     */
    public $users;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

}
