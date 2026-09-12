<?php

namespace App\Game;

require_once 'vendor/autoload.php';

use App\Animal\Animal;
use App\Animal\Dokkaebi;
use App\Animal\Config;
use App\Config\User;
use App\Config\MoneyTransaction;
use App\Config\ItemTransaction;
use App\Config\ShopTransaction;
use App\Products\BasicWater;
use App\Config\ConfigAutoload;
use App\Products\ProductsAutoload;

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new User();
}
if (!isset($_SESSION['mooney'])) {
    $_SESSION['mooney'] = new MoneyTransaction($_SESSION['user']);
}
if (!isset($_SESSION['seesconfig'])) {
    $_SESSION['seesconfig'] = new ConfigAutoload();
}
if (!isset($_SESSION['seesproduct'])) {
    $_SESSION['seesproduct'] = new ProductsAutoload();
}
if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("DokkaebiBiyooTeste");
}

$dokkaebi = $_SESSION['dokkaebi'];
$inv = $_SESSION['inv'];
$needs = $dokkaebi->getNeeds();

$action = $_POST['action'] ?? null;

if ($action === 'comer') {
    $dokkaebi->addHunger(10);
    $dokkaebi->setState("Comeu ...");
} elseif ($action === 'beber') {
    $dokkaebi->addThirst(10);
    $dokkaebi->setState("Bebeu ...");
} elseif ($action === 'dormir') {
    $dokkaebi->addSleep(10);
    $dokkaebi->setState("Dormiu ...");
} elseif ($action === 'tempo') {
}

if (isset($action)) {
    $action = "sesh";
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
    JAVAScript 
    =================================================================
    -->
    <script>
        setInterval(() => {
            fetch("Gametick.php")
        }, 500);
    </script>

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