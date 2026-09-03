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
    public function addmoney($value)
    {
        $this->money = $this->money + $value;
    }
    // REMOVER DINHEIRO
    public function removemoney($value)
    {
        $this->money = $this->money - $value;
    }
    // VER DINHEIRO
    public function viewmoney()
    {
        return $this->money;
    }
}
