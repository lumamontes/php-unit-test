<?php

namespace Alura\User\Model;

class User
{
    /** @var string */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getname(): string
    {
        return $this->name;
    }
}
