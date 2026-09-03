<?php

namespace User;

class User
{
    public string $name;
    //
    private float $money;
    public function __construct()
    {
        $this->money = 10.0;
        $this->basicfeed = 1;
        $this->basicwater = 1;
    }
}
