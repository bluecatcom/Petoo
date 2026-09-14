<?php

namespace App\Game;

use App\Config\User;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Dokkaebi;

require_once __DIR__ . '../../../..//vendor/autoload.php';

//=================================================================
// CONFIG OBJECT SESSIONS
//=================================================================

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new User();
}
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = new ItemTransaction();
}
if (!isset($_SESSION['moomins'])) {
    $_SESSION['moomins'] = new MoneyTransaction();
}
if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("DokkaebiBiyooTeste");
}

$biyoo = $_SESSION['dokkaebi'];
$user = $_SESSION['user'];
$moomins = $_SESSION['moomins'];
$inventory = $_SESSION['inventory'];
