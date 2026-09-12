<?php

namespace App\Game;

use App\Config\User;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;
use App\Animal\Dokkaebi;
use App\Products\BasicWater;
use App\Products\WaterGallon;
use App\Products\PremiumWater;
use App\Products\BasicFeed;
use App\Products\MediumFeed;
use App\Products\AdvancedFeed;
use App\Products\SuperFeed;
use App\Products\PremiumFeed;

require_once __DIR__ . '/vendor/autoload.php';

session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new User();
}
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = new ItemTransaction();
}
if (!isset($_SESSION['mooney'])) {
    $_SESSION['mooney'] = new MoneyTransaction();
}
if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("DokkaebiBiyooTeste");
}

$dokkaebi = $_SESSION['dokkaebi'];
$user = $_SESSION['user'];
$mooney = $_SESSION['mooney'];
$inventory = $_SESSION['inventory'];

$needs = $dokkaebi->getNeeds();

//=================================================================
// SESSION PRODUCTS
//=================================================================

//=================================================================
// BASIC WATER
//=================================================================
if (!isset($_SESSION['basicwater'])) {
    $_SESSION['basicwater'] = new BasicWater($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi'],);
}
$basicwater = $_SESSION['basicwater'];

//=================================================================
// WATER GALLON
//=================================================================
if (!isset($_SESSION['watergallon'])) {
    $_SESSION['watergallon'] = new WaterGallon();
}
$watergallon = $_SESSION['watergallon'];

//=================================================================
// PREMIUM WATER
//=================================================================
if (!isset($_SESSION['premiumwater'])) {
    $_SESSION['premiumwater'] = new PremiumWater();
}
$premiumwater = $_SESSION['premiumwater'];

//=================================================================
// BASIC FEED
//=================================================================
if (!isset($_SESSION['basicfeed'])) {
    $_SESSION['basicfeed'] = new BasicFeed();
}
$basicfeed = $_SESSION['basicfeed'];

//=================================================================
// MEDIUM FEED
//=================================================================
if (!isset($_SESSION['mediumfeed'])) {
    $_SESSION['mediumfeed'] = new Mediumfeed();
}
$mediumfeed = $_SESSION['mediumfeed'];

//=================================================================
// ADVANCED FEED
//=================================================================
if (!isset($_SESSION['advancedfeed'])) {
    $_SESSION['advancedfeed'] = new AdvancedFeed();
}
$advancedfeed = $_SESSION['advancedfeed'];

//=================================================================
// SUPER FEED
//=================================================================
if (!isset($_SESSION['superfeed'])) {
    $_SESSION['superfeed'] = new SuperFeed();
}
$superfeed = $_SESSION['superfeed'];

//=================================================================
// PREMIUM FEED
//=================================================================
if (!isset($_SESSION['premiumfeed'])) {
    $_SESSION['premiumfeed'] = new PremiumFeed();
}
$premiumfeed = $_SESSION['premiumfeed'];


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

$shopping = $_POST['shopping'] ?? null;

if ($shopping === 'basicwater') {

} elseif ($shopping === 'watergallon') {

} elseif ($shopping === 'premiumwater') {

}

if ($shopping === 'basicfeed') {

} elseif ($shopping === 'mediumfeed') {

} elseif ($shopping === 'advancedfeed') {

} elseif ($shopping === 'superfeed') {

} elseif ($shopping === 'premiumfeed') {

}

$stresstest = $_POST['stresstest'] ?? null;

if ($stresstest === 'sesh') {

} elseif ($stresstest === 'dinheiro') {

}



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
            fetch("/Game/Gametick.php")
        }, 500);
    </script>

    <!-- 
    =================================================================
    INVENTORY
    =================================================================
    -->
    <div class="inventory">
    <div class="water">

    <?php if (false !== $inventory->hasItem("basic-water")) : ?>
        <button>use Basic water</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("water-gallon")) : ?>
        <button>use Water gallon</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-water")) : ?>
        <button>Use Premium water</button>
    <?php endif; ?>

    </div>
    <div class="feed">

    <?php if (false !== $inventory->hasItem("basic-feed")) : ?>
        <button>use Basic feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("medium-feed")) : ?>
        <button>use Medium feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("advanced-feed")) : ?>
        <button>use Advanced feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("super-feed")) : ?>
        <button>use Super feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-feed")) : ?>
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
    <form method="post">
    <div class="Shop">

    <div class="water">

        <h2> AGUA </h2>

        <label>
            Água basica pra seu pet!
        </label>
        <button type="submit" name="shopping" value="basicwater">Comprar? 15</button> <br> </br>

        <label>
            Água em galão pra seu pet!?
        </label>
        <button type="submit" name="shopping" value="watergallon">Comprar? 40</button> <br> </br>

        <label>
            Água PREMIUM pra seu pet!!!!!
        </label>
        <button type="submit" name="shopping" value="premiumwater">Comprar? 100</button> <br> </br>

    </div>
    <div class="feed">
        <h2> COMIDA </h2>

        <label>
            Comida basica pra seu pet!
        </label>
        <button type="submit" name="shopping" value="basicfeed">Comprar? 10</button> <br> </br>

        <label>
            Comida mediana pra seu pet!?
        </label>
        <button type="submit" name="shopping" value="mediumfeed">Comprar? 25</button> <br> </br>

        <label>
            Comida avançada pra seu pet!!
        </label>
        <button type="submit" name="shopping" value="advancedfeed">Comprar? 40</button> <br> </br>

        <label>
            Comida SUPER SSS pra seu pet!!?!??
        </label>
        <button type="submit" name="shopping" value="superfeed">Comprar? 75</button> <br> </br>

        <label>
            Comida PREMIUM pra seu pet!!!!!!
        </label>
        <button type="submit" name="shopping" value="premiumfeed">Comprar? 100</button> <br> </br>
        
    </div>
    <div class="berry">

    </div>
    <div class="special">
        
    </div>
    </div>
    </form>



    <form method="post">
    <div class="MOD-TEST-STRESS">

        <h2> MOD FUNÇÕES </h2>
        
        <button type="submit" name="stresstest" value="seshh">
            Oi
        </button>
        
        <button type="submit" name="stresstest" value="dinheiro">
            Quer dinheiro? ent toma 50 reais meu fi ...
        </button>

    </div>
    </form>

</body>
</html>