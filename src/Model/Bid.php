<?php

namespace Alura\Bid\Model;

use Alura\User\Model\User;

class Bid
{
    /** @var User */
    private $user;
    /** @var float */
    private $value;

    public function __construct(User $user, float $value)
    {
        $this->user = $user;
        $this->value = $value;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}