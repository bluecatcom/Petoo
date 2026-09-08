<?php

namespace Config;

class MoneyTransaction
{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function addMoney(int $value): void
    {
        $this->user->mooney += $value;
    }
    // REMOVE MONEY
    public function removeMoney(int $value): void
    {
        $this->user->mooney -= $value;
    }
    // VIEW MONEY
    public function getMoney(): int
    {
        return $this->user->mooney;
    }
}
