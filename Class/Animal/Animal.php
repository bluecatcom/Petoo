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

    // Rates
    protected int $hungerRate;
    protected int $thirstRate;
    protected int $sleepRate;
    protected int $sickRate;

    // state
    protected string $state;
    protected float $happiness;

    public function __construct()
    {
        echo "ANIMAL CONSTRUCT EXECUTOU<br>";
        $this->age = 0;
        $this->hunger = 50;
        $this->thirst = 50;
        $this->sleep = 50;
        $this->hungerRate = 5;
        $this->thirstRate = 5;
        $this->sleepRate = 5;
        $this->sickRate = 1;
        $this->happiness = 0;
        $this->state = "Born";
        $this->eyes = "preto";
        $this->body = "branco";
        $this->ears = "padrao2";
    }

    //=================================================================
    // HUNGER SETTER-GETTER
    //=================================================================
    public function setHunger(int $value): void
    {
        $this->hunger = min(150, max(0, $value));
    }
    public function getHunger(): int
    {
        return $this->hunger;
    }
    public function addHunger(int $value): void
    {
        $this->hunger = min(150, $this->hunger + $value);
    }
    public function removeHunger(int $value): void
    {
        $this->hunger = max(0, $this->hunger - $value);
    }

    //=================================================================
    // THIRST SETTER-GETTER
    //=================================================================
    public function setThirst(int $value): void
    {
        $this->thirst = min(150, max(0, $value));
    }
    public function getThirst(): int
    {
        return $this->thirst;
    }
    public function addThirst(int $value): void
    {
        $this->thirst = min(150, $this->thirst + $value);
    }
    public function removeThirst(int $value): void
    {
        $this->thirst = max(0, $this->thirst - $value);
    }

    //=================================================================
    // SLEEP SETTER-GETTER
    //=================================================================
    public function setSleep(int $value): void
    {
        $this->sleep = min(150, max(0, $value));
    }
    public function getSleep(): int
    {
        return $this->sleep;
    }
    public function addSleep(int $value): void
    {
        $this->sleep = min(150, $this->sleep + $value);
    }
    public function removeSleep(int $value): void
    {
        $this->sleep = max(0, $this->sleep - $value);
    }

    //=================================================================
    // HAPPINESS SETTER-GETTER
    //=================================================================
    public function setHappy(float $value): void
    {
        $this->happiness = min(5, max(0, $value));
    }
    public function getHappy(): float
    {
        return $this->happiness;
    }
    public function addHappy(int $value): void
    {
        $this->happiness = min(150, $this->happiness * $value);
    }
    public function removeHappy(int $value): void
    {
        $this->happiness = max(0, $this->happiness - $value);
    }

    //=================================================================
    // STATES SETTER-GETTER
    //=================================================================
    public function setState(string $state): void
    {
        $this->state = $state;
    }
    public function getState(): string
    {
        return $this->state;
    }

    //=================================================================
    // HUNGER RATE SETTER-GETTER
    //=================================================================
    public function setHungerRate(int $value): void
    {
        $this->hungerRate = max(0, min(5, $value));
    }
    public function getHungerRate(): int
    {
        return $this->hungerRate;
    }

    //=================================================================
    // THIRST RATE SETTER-GETTER
    //=================================================================
    public function setThirstRate(int $value): void
    {
        $this->thirstRate = max(0, min(5, $value));
    }
    public function getThirstRate(): int
    {
        return $this->thirstRate;
    }

    //=================================================================
    // SLEEP RATE SETTER-GETTER
    //=================================================================
    public function setSleepRate(int $value): void
    {
        $this->sleepRate = max(0, min(5, $value));
    }
    public function getSleepRate(): int
    {
        return $this->sleepRate;
    }

    //=================================================================
    // SICK RATE SETTER-GETTER
    //=================================================================
    public function setSickRate(int $value): void
    {
        $this->sickRate = max(0, min(5, $value));
    }
    public function getSickRate(): int
    {
        return $this->sickRate;
    }

    //=================================================================
    // TICK
    //=================================================================
    public function updateNeeds(): void
    {
        $this->removeHunger($this->hungerRate);
        $this->removeThirst($this->thirstRate);
        $this->removeSleep($this->sleepRate);
    }

    //=================================================================
    // APARENCE
    //=================================================================
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

    //=================================================================
    // NAME SETTER-GETTER
    //=================================================================
    public function setName(string $fun): void
    {
        $this->name = $fun;
    }
    public function getName(): string
    {
        return $this->name;
    }

    //=================================================================
    // AGE SETTER-GETTER
    //=================================================================
    public function setAge(float $fun): void
    {
        $this->age = $fun;
    }
    public function getAge(): float
    {
        return round($this->age, 1);
    }
    public function addAge(float $fun): void
    {
        $this->age += $fun;
    }
    public function removeAge(float $fun): void
    {
        $this->age -= $fun;
    }

    //=================================================================
    // EYES SETTER-GETTER
    //=================================================================
    public function setEyes(string $fun): void
    {
            $this->eyes = $fun;
    }
    public function getEyes(): string
    {
            return $this->eyes;
    }

    //=================================================================
    // BODY SETTER-GETTER
    //=================================================================
    public function setBody(string $fun): void
    {
            $this->body = $fun;
    }
    public function getBody(): string
    {
            return $this->body;
    }

    //=================================================================
    // EARS SETTER-GETTER
    //=================================================================
    public function setEars(string $fun): void
    {
            $this->ears = $fun;
    }
    public function getEars(): string
    {
            return $this->ears;
    }

    //=================================================================
    // NEEDS GETTER
    //=================================================================
    public function getNeeds(): array
    {
        return [
        'Name' => $this->getName(),
        'Age' => $this->getAge(),
        'Eyes' => $this->getEyes(),
        'Body' => $this->getBody(),
        'Ears' => $this->getEars(),
        'Hunger' => $this->getHunger(),
        'Thirst' => $this->getThirst(),
        'Sleep' => $this->getSleep(),
        'HungerRate' => $this->getHungerRate(),
        'ThirstRate' => $this->getThirstRate(),
        'SleepRate' => $this->getSleepRate(),
        'SickRate' => $this->getSickRate(),
        'State' => $this->getState(),
        'Happy' => $this->getHappy()
        ];
    }
}
