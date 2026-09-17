<?php

namespace App\Animal\Essentials;

use App\Animal\Dokkaebi;

abstract class Essentials
{
    protected string $name;
    protected string $type;
    protected int $feedcapacity;
    protected int $feedfill;
    protected int $watercapacity;
    protected int $waterfill;
    protected array $effectStack = [];
    private Dokkaebi $dokkaebi;
    public function __construct(Dokkaebi $dokkaebi)
    {
        $this->dokkaebi = $dokkaebi;
    }

    public function getFeedCapacity(): int
    {
        return $this->feedcapacity;
    }
    public function checkFeedFill(): string
    {
        return shell_exec($this->feedfill / $this->feedcapacity);
    }
    public function setFeedFill(int $fun): void
    {
        $this->feedfill = max(0, min(150, $this->feedfill + $fun));
    }
    public function getFeedFill(): int
    {
        return $this->feedfill;
    }
    public function addFeedFill(int $fun): void
    {
        $this->feedfill = min(150, $this->feedfill + $fun);
    }
    public function removeFeedFill(int $fun): void
    {
        $this->feedfill = min(150, $this->feedfill - $fun);
    }

    public function getWaterCapacity(): int
    {
        return $this->watercapacity;
    }
    public function checkWaterFill(): string
    {
        return shell_exec($this->waterfill / $this->watercapacity);
    }
    public function setWaterFill(int $fun): void
    {
        $this->waterfill = max(0, min(150, $this->waterfill + $fun));
    }
    public function getWaterFill(): int
    {
        return $this->waterfill;
    }
    public function addWaterFill(int $fun): void
    {
        $this->waterfill = min(150, $this->waterfill + $fun);
    }
    public function removeWaterFill(int $fun): void
    {
        $this->waterfill = min(150, $this->waterfill - $fun);
    }
    public function comer()
    {
        if ($this->dokkaebi->getHunger() < 150 && $this->getFill() !== 0) {
            $this->dokkaebi->setState("Eating ...");
            sleep(4);
            min(150, $this->dokkaebi->addHunger($this->getFill()));
            $this->dokkaebi->setState("Has eat ...");
        }
    }
    public function beber()
    {
        if ($this->dokkaebi->getThirst() < 150 && $this->getFill() !== 0) {
            $this->dokkaebi->setState("Drinking ...");
            sleep(4);
            min(150, $this->dokkaebi->addThirst($this->getFill()));
            $this->dokkaebi->setState("Has drink ...");
        }
    }
}
