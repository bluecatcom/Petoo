<?php

namespace App\Animal;

class Dokkaebi extends Animal
{
    public function __construct()
    {
        echo "DOKKAEBI CONSTRUCT EXECUTOU<br>";
        parent::__construct();
    }

    /*
    Metodos: getNeeds (Name, Age, Eyes, Body, Ears, Hunger, Thirst, Sleep,
    Metodos: updateNeeds (HungerRate, ThirstRate, SleepRate, SicknessRate, State, Happy)
    Metodos: getHunger, setHunger addHunger, removeHunger
    Metodos: getThirst, setThirst, addThirst, removeThirst
    Metodos: getSleep, setSleep, addSleep, removeSleep
    Metodos: getHappy, setHappy, addHappy, removeHappy
    Metodos: getState, setState, setHungerRate, setThirstRate, setSleepRate, setSickRate
    */
}
