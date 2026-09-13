<?php

namespace App\Products\Feed;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Dokkaebi;

class MediumFeed extends ShopTransaction
{
    protected float $price = 25;
    protected string $name = "medium-feed";
    private int $hunger = 20;
    private int $thirst = 0;
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
        $this->animal->setState("Used Medium Feed ...");
    }
}
