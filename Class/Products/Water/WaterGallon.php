<?php

namespace App\Products;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;

class WaterGallon extends ShopTransaction
{
    protected float $price = 40;
    protected string $name = "watergallon";
    private Animal $animal;
    public function __construct(
        ItemTransaction $item,
        MoneyTransaction $money,
        Animal $animal
    ) {
        parent::__construct($item, $money);
        $this->animal = $animal;
    }
    public function effect(): void
    {
        $this->animal->addHunger(0);
        $this->animal->addThirst(40);
        // effect: $this->animal->setState("Saciado")
    }
}
