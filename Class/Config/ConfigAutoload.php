<?php

/*
namespace App\Config;

use App\Config\User;
use App\Config\MoneyTransaction;
use App\Config\ItemTransaction;
use App\Config\ShopTransaction;

class ConfigAutoload
{
    public function __construct()
    {
        session_start();

        if (!isset($_SESSION['inv'])) {
            $_SESSION['inv'] = new ItemTransaction();
        }
        if (!isset($_SESSION['mooney'])) {
            $_SESSION['mooney'] = new MoneyTransaction($_SESSION['user']);
        }
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = new User($_SESSION['inv'], $_SESSION['mooney']);
        }
        if (!isset($_SESSION['shop'])) {
            $_SESSION['shop'] = new ShopTransaction($_SESSION['inv'], $_SESSION['mooney']);
        }

        $user = $_SESSION['user'];
        $mooney = $_SESSION['mooney'];
        $inv = $_SESSION['inv'];
        $shop = $_SESSION['shop'];
    }
}
*/
