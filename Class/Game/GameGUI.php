<?php

namespace App\Game;

require_once __DIR__ . '/bootstrap.php';

$gui = $_POST['GUI'] ?? '';

if (!isset($_SESSION['GUI'])) {
    $_SESSION['GUI'] = $gui;
}

if ($gui == "user") {
    require_once __DIR__ . '/GameCLI/GameUser-Inventory.php';
}
if ($gui == "shop") {
    require_once __DIR__ . '/GameCLI/GameShop.php';
}
if ($gui == "mod") {
    require_once __DIR__ . '/GameCLI/GameMod.php';
}

header('Location: "Game.php');
