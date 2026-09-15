<?php

namespace App\Animal;

class Dokkaebi extends Animal
{
    public function __construct()
    {
        echo "DOKKAEBI CONSTRUCT EXECUTOU<br>";
        parent::__construct();
    }

    // Basic info
    protected string $name;
    protected float $age;

    // Aparence
    protected string $eyes;
    protected string $body;
    protected string $ears;

    // Necessity
    protected int $hunger;
    protected int $thirst;
    protected int $sleep;

    // Rates
    protected int $hungerRate;
    protected int $thirstRate;
    protected int $sleepRate;
    protected int $sickRate;

    // state
    protected string $state;
    protected float $happiness;

    public function dormir()
    {
        # aumentar o sono de acordo com a qualiadde da cama e deixar ele imobilizado enquanto dorme
    }
}
