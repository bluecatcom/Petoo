<?php

namespace User;

class Itens
{
    private array $items = [];
    // ADICIONAR ITEM
    public function addItem(string $item): void
    {
        $this->items[$item] = ($this->items[$item] ?? 0) + 1;
    }
    // REMOVER ITEM
    public function removeItem(string $item): void
    {
        if (!isset($this->items[$item])) {
            return;
        }
        $this->items[$item]--;
        if ($this->items[$item] <= 0) {
            unset($this->items[$item]);
        }
    }
    // VER ITENS
    public function viewitens()
    {
        return $this->items;
    }
}

class BasicWater
{
    private float $price = 2.0;

    public function buy(User $user): void
    {
        if ($user->getMoney() >= $this->price) {
            $user->removeMoney($this->price);
            $user->getItens()->addItem("basicwater");
        }
    }
}


    /*
    // BASIC
    private int $basicfeed;
    private int $basicwater;
    // feed = +10 satiety of hunger
    // water = +10 satiety of thirsty
    //
    // MEDIUM
    private int $mediumfeed;
    private int $mediumwater;
    // feed = +25 satiety of hunger
    // water = +25 satiety of thirsty
    //
    // ADVANCED
    private int $advancedfeed;
    private int $advancedwater;
    // feed = +35 satiety of hunger
    // water = +35 satiety of thirsty
    //
    // PREMIUM
    private int $premiumfeed;
    private int $premiumwater;
    // feed = +35 satiety of hunger
    // water = +35 satiety of thirsty
    //
    // BERRY BAG
    private int $strawberry;
    private int $blueberry;
    private int $raspberry;
    private int $blackberry;
    private int $cranberry;
    private int $gooseberry;
    private int $redcurrant;
    private int $blackcurrant;
    private int $whitecurrant;
    private int $elderberry;
    private int $mulberry;
    private int $goji_berry;
    private int $acai_berry; // Açaí
    private int $barberry;
    private int $juniper_berry;
    private int $cloudberry;
    private int $boysenberry;
    private int $loganberry;
    private int $huckleberry;
    private int $bilberry;
    private int $lingonberry;
    private int $sea_buckthorn_berry;
    private int $golden_berry;
    */
