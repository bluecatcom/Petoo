<?php

namespace Products;

use App\User\User;
use App\User\Itens;

abstract class Config implements Shop
{
    protected float $price;
    protected string $name;

    private Itens $itens;
    private User $user;

    public function __construct(Itens $itens, User $user)
    {
        $this->itens = $itens;
        $this->user = $user;
    }

    public function buy()
    {
        if ($this->user->viewMoney() >= $this->price) {
            $this->user->removeMoney($this->price);
            $this->itens->addItem($this->name);
        }
    }

    public function sell()
    {
        $this->user->addMoney($this->price * 0.7);
        $this->itens->removeItem($this->name);
    }

    public function sellAll()
    {
        $quantity = $this->itens->getQuantity($this->name);
        $multprice = $this->price * $quantity;

        $this->user->addMoney($multprice * 0.85);

        $contador = 0;

        while ($contador < $quantity) {
            $this->itens->removeItem($this->name);
            $contador++;
        }
    }

    public function use()
    {
        if ($this->itens->getQuantity($this->name) >= 1) {
            $this->itens->removeItem($this->name);
            $this->effect();
        }
    }

    abstract public function effect();
}
