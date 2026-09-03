<?php

namespace Animals\Animal;

class Animal
{
    public string $nome;
    public string $raca;
    public string $especie;
    public int $idade;

    private int $fome;
    private int $sede;
    private int $sono;
    private string $estado;

    public function __construct()
    {
        $this->fome = 100;
        $this->sede = 100;
        $this->sono = 100;
        $this->estado = "Normal";
    }

    public function comer()
    {
        echo "Comendo...";
        $this->fome = min(150, $this->fome + 10);
        echo " Comeu!";

        if ($this->fome <= 20) {
            echo"passando fome...";
        } elseif ($this->fome <= 100) {
            echo"normal...";
        } elseif ($this->fome <= 139) {
            echo"comendo demais...";
        } elseif ($this->fome >= 140) {
            echo"explodiu...";
        }
    }

    public function beber()
    {
        echo "Bebendo...";
        $this->sede = min(150, $this->sede + 10);
        echo " Bebeu!";

        if ($this->sede <= 20) {
            echo"passando sede...";
        } elseif ($this->sede <= 100) {
            echo"normal...";
        } elseif ($this->sede <= 139) {
            echo"bebendo demais...";
        } elseif ($this->sede >= 140) {
            echo"explodiu...";
        }
    }

    public function dormir()
    {
        echo "Dormindo...";
        $this->sono = min(150, $this->sono + 10);
        echo " Dormiu!";

        if ($this->sono <= 20) {
            echo"com sono...";
        } elseif ($this->sono <= 100) {
            echo"normal...";
        } elseif ($this->sono <= 139) {
            echo"dormindo demais...";
        } elseif ($this->sono >= 140) {
            echo"explodiu...";
        }
    }
}
