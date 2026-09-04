<?php

namespace User;

class User
{
    public string $name;
    //
    private float $money;
    private Itens $itens;
    //
    public function __construct()
    {
        $this->money = 10.0;
        $itens->addItem("basicfeed");
        $itens->addItem("basicwater");
    }
    // ADICIONAR DINHEIRO
    public function addMoney($value): void
    {
        $this->money = $this->money + $value;
    }
    // REMOVER DINHEIRO
    public function removeMoney($value): void
    {
        $this->money = $this->money - $value;
    }
    // VER DINHEIRO
    public function viewMoney(): int
    {
        return $this->money;
    }
}
