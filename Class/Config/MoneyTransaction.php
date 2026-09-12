<?php

namespace App\Config;

class MoneyTransaction
{
    private float $mooney;

    public function __construct()
    {
        #
    }

    // ADD MONEY
    public function addMoney(int $value): void
    {
        $this->mooney += $value;
    }

    // REMOVE MONEY
    public function removeMoney(int $value): void
    {
        $this->mooney -= $value;
    }

    // VIEW MONEY
    public function getMoney(): int
    {
        return $this->mooney;
    }
}
