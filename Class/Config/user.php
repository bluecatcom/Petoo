<?php

namespace Config;

class User
{
    private string $name;
    private float $mooney;
    //
    private ItemTransaction $item;
    private MoneyTransaction $money;
    //
    public function __construct(ItemTransaction $item, MoneyTransaction $money)
    {
        $this->item = $item;
        $this->money = $money;
        $this->starterpack();
    }
    private function giveStarterPack()
    {
        $this->money->addMoney(20.0);
        $this->item->addItem("basic-feed");
        $this->item->addItem("basic-water");
    }
}
