<?php

namespace App\Products\Water;

use App\Config\ShopTransaction;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Essentials\Essentials;

class PremiumWater extends ShopTransaction
{
    protected float $price = 100;
    protected string $name = "premium-water";
    private int $hunger = 15;
    private int $thirst = 75;
    private Essentials $essentials;
    public function __construct(
        ItemTransaction $item,
        MoneyTransaction $money,
        Essentials $essentials
    ) {
        parent::__construct($item, $money);
        $this->essentials = $essentials;
    }
    public function effect(): void
    {
        $this->essentials->addFeedFill($this->hunger);
        $this->essentials->addWaterFill($this->thirst);
    }
}
