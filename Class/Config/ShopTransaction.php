<?php

namespace App\Config;

abstract class ShopTransaction
{
    protected float $price;
    protected string $name;
    private ItemTransaction $item;
    private MoneyTransaction $money;
    public function __construct(ItemTransaction $item, MoneyTransaction $money)
    {
        $this->item = $item;
        $this->money = $money;
    }
    public function buy(): void
    {
        if ($this->money->getMoney() >= $this->price) {
            $this->money->removeMoney($this->price);
            $this->item->addItem($this->name);
        }
    }
    public function use(): void
    {
        if ($this->item->muchItem($this->name) > 0) {
            $this->item->removeItem($this->name);
            $this->effect();
        }
    }
    public function sell(): void
    {
        $this->money->addMoney($this->price * 0.7);
        $this->item->removeItem($this->name);
    }
    public function sellAll(): void
    {
        $quantity = $this->item->muchItem($this->name);
        $multprice = $this->price * $quantity;

        $this->money->addMoney($multprice * 0.85);
        $contador = 0;

        while ($contador < $quantity) {
            $this->item->removeItem($this->name);
            $contador++;
        }
    }
    abstract public function effect();
}
