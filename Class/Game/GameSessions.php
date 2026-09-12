<?php

namespace App\Game;

use App\Animal\Dokkaebi;
use App\Config\User;
use App\Config\MoneyTransaction;

if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi($_SESSION['user']);
}

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new User();
}

if (!isset($_SESSION['mooney'])) {
    $_SESSION['mooney'] = new MoneyTransaction($_SESSION['user']);
}
