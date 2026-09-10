<?php

namespace App\Animal;

// use App\Animal\Config;

abstract class Animal
{
    // use Config;

    // Basic info
    protected string $name;
    protected float $age;

    // Aparence
    protected string $eyes;
    protected string $body;
    protected string $ears;

    // Necessity
    protected int $hunger;
    protected int $thirst;
    protected int $sleep;

    // Taxas
    protected int $hungerRate;
    protected int $thirstRate;
    protected int $sleepRate;
    protected int $sicknessRate;

    // state
    protected string $state;
    protected float $happiness;

    public function __construct()
    {
        echo "ANIMAL CONSTRUCT EXECUTOU<br>";
        $this->setAge(0.1);
        $this->setHunger(100);
        $this->setThirst(100);
        $this->setSleep(100);
        $this->setHungerRate(5);
        $this->setThirstRate(5);
        $this->setSleepRate(5);
        $this->setSickRate(5);
        $this->setHappy(0.1);
        $this->setState("Born");
        $this->setEyes("preto");
        $this->setBody("branco");
        $this->setEars("padrao1");
    }

    // Basic Functions
    public function setNeeds(string $need, $new): void
    {
        switch ($need) {
            case 'Name':
                $this->name = $new;
                break;
            case 'Age':
                $this->age = $new;
                break;
            case 'Eyes':
                $this->eyes = $new;
                break;
            case 'Body':
                $this->body = $new;
                break;
            case 'Ears':
                $this->ears = $new;
                break;
            default:
                return;
                break;
        }
    }

    // Hunger
    public function getHunger(): int
    {
        return $this->hunger;
    }
    public function setHunger(int $value): void
    {
        $this->hunger = min(150, max(0, $value));
    }
    public function addHunger(int $value): void
    {
        $this->hunger = min(150, $this->hunger + $value);
    }
    public function removeHunger(int $value): void
    {
        $this->hunger = max(0, $this->hunger - $value);
    }

    // Thirst
    public function getThirst(): int
    {
        return $this->thirst;
    }
    public function setThirst(int $value): void
    {
        $this->thirst = min(150, max(0, $value));
    }
    public function addThirst(int $value): void
    {
        $this->thirst = min(150, $this->thirst + $value);
    }
    public function removeThirst(int $value): void
    {
        $this->thirst = max(0, $this->thirst - $value);
    }

    // Sleep
    public function getSleep(): int
    {
        return $this->sleep;
    }
    public function setSleep(int $value): void
    {
        $this->sleep = min(150, max(0, $value));
    }
    public function addSleep(int $value): void
    {
        $this->sleep = min(150, $this->sleep + $value);
    }
    public function removeSleep(int $value): void
    {
        $this->sleep = max(0, $this->sleep - $value);
    }

    // Hapiness
    public function getHappy(): float
    {
        return $this->happiness;
    }
    public function setHappy(float $value): void
    {
        $this->happiness = min(5, max(0, $value));
    }
    public function addHappy(int $value): void
    {
        $this->happiness = min(150, $this->happiness * $value);
    }
    public function removeHappy(int $value): void
    {
        $this->happiness = max(0, $this->happiness - $value);
    }

    // States
    public function getState(): string
    {
        return $this->state;
    }
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    // Advanced Functions

    // Rates
    public function setHungerRate(int $value): void
    {
        $this->hungerRate = max(0, min(5, $value));
    }
    public function setThirstRate(int $value): void
    {
        $this->thirstRate = max(0, min(5, $value));
    }
    public function setSleepRate(int $value): void
    {
        $this->sleepRate = max(0, min(5, $value));
    }
    public function setSickRate(int $value): void
    {
        $this->sicknessRate = max(0, min(5, $value));
    }

    // Ticks
    public function updateNeeds(): void
    {
        $this->removeHunger($this->hungerRate);
        $this->removeThirst($this->thirstRate);
        $this->removeSleep($this->sleepRate);
    }

    // Apparence

    protected array $eyesList = [
    'preto',
    'azul',
    'vermelho',
    'verde',
    'gold',
    'rainbow'
    ];

    protected array $bodyList = [
    'branco',
    'preto',
    'azul',
    'vermelho',
    'roxo',
    'amarelo',
    'marrom',
    'rosa',
    'laranja',
    'verde',
    'gold',
    'rainbow',
    'water',
    'cloud',
    'robot',
    'raccon'
    ];

    protected array $earsList = [
    'padrao1',
    'padrao2',
    'padrao3',
    'padrao4',
    'coelho',
    'gato',
    'urso',
    'robot',
    'water',
    'gold',
    'rainbow'
    ];

    public function setName(string $fun): void
    {
        $this->name = $fun;
    }

    public function setAge(float $fun): void
    {
        $this->age = $fun;
    }

    public function addAge(float $fun): void
    {
        $this->age += $fun;
    }

    public function setEyes(string $fun): void
    {
            $this->eyes = $fun;
    }

    public function setBody(string $fun): void
    {
            $this->body = $fun;
    }

    public function setEars(string $fun): void
    {
            $this->ears = $fun;
    }

    public function getNeeds(): array
    {
        return [
        'Name' => $this->name,
        'Age' => $this->age,
        'Eyes' => $this->eyes,
        'Body' => $this->body,
        'Ears' => $this->ears,
        'Hunger' => $this->hunger,
        'Thirst' => $this->thirst,
        'Sleep' => $this->sleep,
        'HungerRate' => $this->hungerRate,
        'ThirstRate' => $this->thirstRate,
        'SleepRate' => $this->sleepRate,
        'SicknessRate' => $this->sicknessRate,
        'State' => $this->state,
        'Happy' => $this->happiness
        ];
    }

    public function getAge(): float
    {
        return round($this->age, 1);
    }
}
