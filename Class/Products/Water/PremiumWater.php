<?php

namespace App\Products;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Dokkaebi;

class PremiumWater extends ShopTransaction
{
    protected float $price = 100;
    protected string $name = "premium-water";
    private int $hunger = 15;
    private int $thirst = 75;
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
        $this->animal->setState("Usou Premium Water ...");
    }
}
