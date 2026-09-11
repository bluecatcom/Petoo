<?php

namespace App\Game;

require_once 'vendor/autoload.php';

use App\Config\Session;

if (!isset($_SESSION['sees'])) {
    $_SESSION['sees'] = new Session();
}

use App\Animal\Animal;
use App\Animal\Dokkaebi;
use App\Animal\Config;
use App\Config\User;
use App\Config\MoneyTransaction;
use App\Config\ItemTransaction;
use App\Config\ShopTransaction;
use App\Products\BasicWater;

if ($sees->has($dokkaebi)) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
}


if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $dokkaebi->setName("DokkaebiBiyooTeste");
}
if (!isset($_SESSION['inv'])) {
    $_SESSION['inv'] = new ItemTransaction();
}
if (!isset($_SESSION['inv'])) {
    $_SESSION['inv'] = new ItemTransaction();
}

$dokkaebi = $_SESSION['dokkaebi'];
$inv = $_SESSION['inv'];

$needs = $dokkaebi->getNeeds();

$alimentacao = $_POST['alimentacao'] ?? false;

if ($alimentacao === 'comer') {
    $dokkaebi->addHunger(10);
    $dokkaebi->setState("Comeu ...");
} elseif ($alimentacao === 'beber') {
    $dokkaebi->addThirst(10);
    $dokkaebi->setState("Bebeu ...");
} elseif ($alimentacao === 'dormir') {
    $dokkaebi->addSleep(10);
    $dokkaebi->setState("Dormiu ...");
} elseif ($alimentacao === 'tempo') {
    $dokkaebi->updateNeeds();
    $dokkaebi->addAge(0.01);
    $dokkaebi->setState("Envelheceu ...");
}

if (isset($alimentacao)) {
    $alimentacao = "sesh";
}

$status = $_POST['status'] ?? false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['animals'][] = $dokkaebi;
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My little Dokkaebi</title>
</head>
<body>

    <!-- 
    =================================================================
    INVENTORY
    =================================================================
    -->
    <div class="inventory">
    <div class="water">

    <?php if (false !== $inv->hasItem("basic-water")) : ?>
        <button>use Basic water</button>
    <?php endif; ?>

    <?php if (false !== $inv->hasItem("water-gallon")) : ?>
        <button>use Water gallon</button>
    <?php endif; ?>

    <?php if (false !== $inv->hasItem("premium-water")) : ?>
        <button>Use Premium water</button>
    <?php endif; ?>

    </div>
    <div class="feed">

    <?php if (false !== $inv->hasItem("basic-feed")) : ?>
        <button>use Basic feed</button>
    <?php endif; ?>

    <?php if (false !== $inv->hasItem("medium-feed")) : ?>
        <button>use Medium feed</button>
    <?php endif; ?>

    <?php if (false !== $inv->hasItem("advanced-feed")) : ?>
        <button>use Advanced feed</button>
    <?php endif; ?>

    <?php if (false !== $inv->hasItem("super-feed")) : ?>
        <button>use Super feed</button>
    <?php endif; ?>

    <?php if (false !== $inv->hasItem("premium-feed")) : ?>
        <button>use Premium feed</button>
    <?php endif; ?>

    </div>
    <div class="berry">

    </div>
    <div class="special">

    </div>
    </div>

    <!-- 
    =================================================================
    SHOP
    =================================================================
    -->
    <div class="Shop">
    <div class="water">

    </div>
    <div clas0s="feed">

    </div>
    <div class="berry">

    </div>
    <div class="special">
        
    </div>
    </div>

    <div class="Petspace">

    </div>

</body>
</html>