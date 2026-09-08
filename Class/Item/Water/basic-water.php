<?php

namespace Products;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;

class BasicWater extends ShopTransaction
{
    protected float $price = 15;
    protected string $name = "basicwater";
    //
    private ItemTransaction $item;
    private MoneyTransaction $money;
    private Animal $animal;
    public function __construct(ItemTransaction $item, MoneyTransaction $money)
    {
        $this->item = $item;
        $this->money = $money;
        $this->animal = $animal;
    }
    public function effect(): void
    {
        $this->animal->eat();
        $this->animal->drink();
        # aumentar alegria
        # definir estado
        # efeito
        # efeito de raça
    }
}
