<?php

namespace Base\User;

class User
{
    public string $nome;
    //
    private float $dinheiro;
    private int $racao;
    private int $agua;

    public function __construct()
    {
        $this->dinheiro = 10.0;
        $this->racao = 1;
        $this->agua = 1;
    }
}
