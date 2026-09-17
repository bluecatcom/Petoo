<?php

namespace App\Products\Water;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Essentials\Essentials;

class BasicWater extends ShopTransaction
{
    protected float $price = 15;
    protected string $name = "basic-water";
    private int $hunger = 0;
    private int $thirst = 15;
    private Essentials $essential;
    public function __construct(
        ItemTransaction $item,
        MoneyTransaction $money,
        Essentials $essential
    ) {
        parent::__construct($item, $money);
        $this->essential = $essential;
    }
    public function effect(): void
    {
        $this->essential->addFeedFill($this->hunger);
        $this->essential->addWaterFill($this->thirst);
    }
}
