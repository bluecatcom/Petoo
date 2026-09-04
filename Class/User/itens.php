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
    public function viewitens(): array
    {
        return $this->items;
    }
    // TEM ITEM?
    public function hasItem(string $item): bool
    {
        return isset($this->items[$item]);
    }
    public function getQuantity(string $item): int
    {
        return $this->items[$item] ?? 0;
    }
}
