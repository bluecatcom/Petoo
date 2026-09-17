<?php

namespace App\Game;

use App\Config\User;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Dokkaebi;

require_once __DIR__ . '/bootstrap.php';


$dokkaebiName = $_POST['dokkaebiName'] ?? '';

if (!isset($_SESSION['dokkaebiName'])) {
    $_SESSION['dokkaebiName'] = $dokkaebiName;
}

require_once __DIR__ . '/GameCLI/GameDokkaebi.php';

$gui = $_POST['GUI'] ?? '';
$_SESSION['GUI'] = $_POST['GUI'] ?? '';

if (!isset($_SESSION['GUI'])) {
    $_SESSION['GUI'] = $gui;
}

if ($gui == '') {
    $gui = $_SESSION['GUI'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>

    <!-- 
    =================================================================
    GUI
    =================================================================
    -->

    <form method="post">
        <div class="GUI">
            <div class="buttonGUI">

                <button type="submit" name="GUI" value="user">USER</button>

                <button type="submit" name="GUI" value="shop">SHOP</button>

                <button type="submit" name="GUI" value="mod">MOD</button>
            </div>
        </div>
    </form>
    
    <?php if ($gui == "user") : ?>
        <?php require_once __DIR__ . '/GameCLI/GameUser-Inventory.php'; ?>
    <?php endif; ?>

    <?php if ($gui == "shop") : ?>
        <?php require_once __DIR__ . '/GameCLI/GameShop.php'; ?>
    <?php endif; ?>

    <?php if ($gui == "mod") : ?>
        <?php require_once __DIR__ . '/GameCLI/GameMod.php'; ?>
    <?php endif; ?>

    <?php if ($gui == '') : ?>
        <p>=================================================================</p>
    <?php endif; ?>

    <?php if ($gui !== '') : ?>
        <p>=================================================================</p>
    <?php endif; ?>
</body>
</html>