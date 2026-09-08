<?php

namespace App\Animal;

trait Config
{
    private Animal $animal;
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
    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }
    public function setName($fun)
    {
        $this->animal->name = $fun;
    }
    public function setAge($fun)
    {
        $this->animal->age = $fun;
    }
    public function setEyes($fun)
    {
        if (in_array($fun, $this->eyesList)) {
            $this->animal->eyes = $fun;
        }
    }
    public function setBody($fun)
    {
        if (in_array($fun, $this->bodyList)) {
            $this->animal->body = $fun;
        }
    }
    public function setEars($fun)
    {
        if (in_array($fun, $this->earsList)) {
            $this->animal->ears = $fun;
        }
    }
}
