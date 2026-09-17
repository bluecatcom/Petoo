<?php

/* namespace App\Animal\Essentials;

trait EffectStack
{
    private array $effectStack = [];
    public function addEffect(string $fun): void
    {
        $this->effectStack[$fun] = ($this->effectStack[$fun] ?? 0) + 1;
    }
    public function removeEffect(string $fun): void
    {
        if (!isset($this->effectStack[$fun])) {
            return;
        }
        $this->effectStack[$fun]--;
        if ($this->effectStack[$fun] <= 0) {
            unset($this->effectStack[$fun]);
        }
    }
    public function getEffects(): array
    {
        return $this->effectStack;
    }
    public function hasEffect(string $fun): bool
    {
        return isset($this->effectStack[$fun]);
    }
    public function removeAllEffect()
    {
        foreach ($this->getEffects() as $effect) {
            unset($this->effectStack[$effect]);
        }
    }
}
*/
