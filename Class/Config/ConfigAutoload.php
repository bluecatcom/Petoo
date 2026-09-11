<?php

namespace App\Config;

class ConfigAutoload
{
    public function __construct()
    {
        if (!isset($_SESSION['item'])) {
            $_SESSION['item'] = new ItemTransaction();
        }
        if (!isset($_SESSION['money'])) {
            $_SESSION['money'] = new MoneyTransaction();
        }
        if (!isset($_SESSION['shop'])) {
            $_SESSION['shop'] = new ShopTransaction();
        }
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = new User();
        }
    }
}
