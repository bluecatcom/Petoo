<?php

namespace pet;

class Animal
{
    public string $nome;
    public string $raca;
    public string $especie;
    public int $idade;

    private int $fome;
    private int $sede;
    private int $sono;

    public function __construct()
    {
        $this->fome = 100;
        $this->sede = 100;
        $this->sono = 100;
    }

    public function comer()
    {
        echo "Comendo...";
        $this->fome = $this->fome + 10;
        echo " Comeu!";
    }

    public function beber()
    {
        echo "Bebendo...";
        $this->sede = $this->sede + 10;
        echo " Bebeu!";
    }

    public function dormir()
    {
        echo "Dormindo...";
        $this->sono = $this->sono + 10;
        echo " Dormiu!";
    }
}
