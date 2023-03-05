<?php

namespace App\Event;

use App\Entity\User;
use Symfony\Contracts\EventDispatcher\Event;

class UserRegisteredEvent extends Event {

    const info = "user.registred";

    private $user;
    public function __construct(User $user) {
        $this->user = $user;
    }

    public function getUser(): User {
        return $this->user;
    }

}