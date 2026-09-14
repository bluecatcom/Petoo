<?php

namespace App\Config;

class User
{
    private string $name;

    public function __construct()
    {
        #
    }

    public function setName(string $fun): void
    {
        $this->name = $fun;
    }
    public function getName(): string
    {
        return $this->name;
    }

}
