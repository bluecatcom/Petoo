<?php

namespace App\Products;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;

class PremiumFeed extends ShopTransaction
{
    protected float $price = 100;
    protected string $name = "premium-feed";
    private int $hunger = 75;
    private int $thirst = 15;
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
        $this->animal->addHunger($this->hunger);
        $this->animal->addThirst($this->thirst);
        $this->animal->setState("Usou Premium Feed ...");
    }
}
