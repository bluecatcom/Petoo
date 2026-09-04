<?php

namespace Products;

use App\User\User;
use App\User\Itens;

abstract class Water implements Shop
{
    # comprar, vender e usar ...
    //
    protected float $price;
    protected string $name;
    //
    private itens $itens;
    private user $user;
    public function __construct(Itens $itens, User $user)
    {
        $this->Itens = $itens;
        $this->User = $user;
    }
    //
    public function buy()
    {
        # Comprar ...
        if ($this->user->viewMoney() >= $this->price) {
            $this->user->removeMoney($this->price);
            $this->itens->addItem($this->name);
        }
    }
    //
    public function sell()
    {
        # Vender ...
            $this->user->addMoney($this->price * 0.7);
            $this->itens->removeItem($this->name);
    }
    //
    public function sellAll()
    {
        # Vender todos ...
        $quantity = $this->itens->getQuantity($this->name);
        $multprice = $this->price * $quantity;
        $this->user->addMoney($multprice * 0.85);
        $contador = 0;
        while ($contador < $quantity) {
            $this->itens->removeItem($this->name);
            $contador++;
        }
    }
    //
    public function use()
    {
        # Usar ...
        $this->itens->removeitem($this->name);
    }
}
