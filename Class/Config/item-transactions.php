<?php

namespace App\Config;

class ItemTransaction
{
    private array $items = [];
    // ADD ITEM
    public function addItem(string $item): void
    {
        $this->items[$item] = ($this->items[$item] ?? 0) + 1;
    }
    // REMOVE ITEM
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
    // VIEW ITENS
    public function getItens(): array
    {
        return $this->items;
    }
    // HAS ITEM
    public function hasItem(string $item): bool
    {
        return isset($this->items[$item]);
    }
    // HOW MUCH
    public function muchItem(string $item): int
    {
        return $this->items[$item] ?? 0;
    }
}
