<?php

namespace App\Products\Water;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Dokkaebi;

class WaterGallon extends ShopTransaction
{
    protected float $price = 40;
    protected string $name = "water-gallon";
    private int $hunger = 0;
    private int $thirst = 40;
    private Dokkaebi $animal;
    public function __construct(
        ItemTransaction $item,
        MoneyTransaction $money,
        Dokkaebi $animal
    ) {
        parent::__construct($item, $money);
        $this->animal = $animal;
    }
    public function effect(): void
    {
        $this->animal->addHunger($this->hunger);
        $this->animal->addThirst($this->thirst);
        $this->animal->setState("Used Water Gallon ...");
    }
}
