<?php

namespace dono;

class Usuario
{
    public string $nome;
    //
    private int $racao;
    private int $agua;

    public function __construct()
    {
        $this->racao = 1;
        $this->agua = 1;
    }
}
