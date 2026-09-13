<?php

namespace App\Products\Water;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;

class BasicWater extends ShopTransaction
{
    protected float $price = 15;
    protected string $name = "basic-water";
    private int $hunger = 0;
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
        $this->animal->setState("Used Basic Water ...");
    }
}
