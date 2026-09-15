<?php

namespace App\Animal;

class Needs
{
    protected string $name;
    protected string $type;
    protected int $capacity;
    protected int $fill;
    private Dokkaebi $dokkaebi;
    public function __construct(Dokkaebi $dokkaebi)
    {
        $this->dokkaebi = $dokkaebi;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function checkFill(): string
    {
        return `{$this->fill} / {$this->capacity}`;
    }
    public function setFill(int $fun): void
    {
        $this->fill = $fun;
    }
    public function getFill(): int
    {
        return $this->fill;
    }
    public function addFill(int $fun): void
    {
        $this->fill += $fun;
    }
    public function removeFill(int $fun): void
    {
        $this->fill -= $fun;
    }
    public function comer()
    {
        if ($this->dokkaebi->getHunger() < 150 && $this->getFill() !== 0) {
            if (condition) {
                # code...
            }
        }
    }
    public function beber()
    {
        # subtrair do pote (fill) se estiver cheio o suficiente
    }
}
