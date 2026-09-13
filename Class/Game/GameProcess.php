<?php

namespace App\Game;

use App\Config\User;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;
use App\Animal\Dokkaebi;
use App\Products\Water\BasicWater;
use App\Products\Water\WaterGallon;
use App\Products\Water\PremiumWater;
use App\Products\Feed\BasicFeed;
use App\Products\Feed\MediumFeed;
use App\Products\Feed\AdvancedFeed;
use App\Products\Feed\SuperFeed;
use App\Products\Feed\PremiumFeed;

require_once __DIR__ . '../../..//vendor/autoload.php';

session_start();

//=================================================================
// SESSÕES DE OBJETOS DO SISTEMA
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

$needs = $biyoo->getNeeds();

//=================================================================
// SESSION PRODUCTS
//=================================================================

//=================================================================
// BASIC WATER
//=================================================================
if (!isset($_SESSION['basic-water'])) {
    $_SESSION['basic-water'] = new BasicWater($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$basicwater = $_SESSION['basic-water'];

//=================================================================
// WATER GALLON
//=================================================================
if (!isset($_SESSION['water-gallon'])) {
    $_SESSION['water-gallon'] = new WaterGallon($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$watergallon = $_SESSION['water-gallon'];

//=================================================================
// PREMIUM WATER
//=================================================================
if (!isset($_SESSION['premium-water'])) {
    $_SESSION['premium-water'] = new PremiumWater($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$premiumwater = $_SESSION['premium-water'];

//=================================================================
// BASIC FEED
//=================================================================
if (!isset($_SESSION['basic-feed'])) {
    $_SESSION['basic-feed'] = new BasicFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$basicfeed = $_SESSION['basic-feed'];

//=================================================================
// MEDIUM FEED
//=================================================================
if (!isset($_SESSION['medium-feed'])) {
    $_SESSION['medium-feed'] = new MediumFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$mediumfeed = $_SESSION['medium-feed'];

//=================================================================
// ADVANCED FEED
//=================================================================
if (!isset($_SESSION['advanced-feed'])) {
    $_SESSION['advanced-feed'] = new AdvancedFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$advancedfeed = $_SESSION['advanced-feed'];

//=================================================================
// SUPER FEED
//=================================================================
if (!isset($_SESSION['super-feed'])) {
    $_SESSION['super-feed'] = new SuperFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$superfeed = $_SESSION['super-feed'];

//=================================================================
// PREMIUM FEED
//=================================================================
if (!isset($_SESSION['premium-feed'])) {
    $_SESSION['premium-feed'] = new PremiumFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$premiumfeed = $_SESSION['premium-feed'];


//=================================================================
// FORM PROCESSING
//=================================================================
if (null !== ($_SESSION['messager'] ?? null)) {
    $_SESSION['messager'] = $message;
}

//=================================================================
// SHOPPING
//=================================================================
$shopping = $_POST['shopping'] ?? null;

//=================================================================
// WATER SESSION
//=================================================================
if ($shopping === 'basic-water') {
    if ($moomins->getMoney() >= $basicwater->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($basicwater->getItemPrice());
    }
} elseif ($shopping === 'water-gallon') {
    if ($moomins->getMoney() >= $watergallon->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($watergallon->getItemPrice());
    }
} elseif ($shopping === 'premium-water') {
    if ($moomins->getMoney() >= $premiumwater->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($premiumwater->getItemPrice());
    }
}

//=================================================================
// FEED SESSION
//=================================================================

if ($shopping === 'basic-feed') {
    if ($moomins->getMoney() >= $basicfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($basicfeed->getItemPrice());
    }
} elseif ($shopping === 'medium-feed') {
    if ($moomins->getMoney() >= $mediumfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($mediumfeed->getItemPrice());
    }
} elseif ($shopping === 'advanced-feed') {
    if ($moomins->getMoney() >= $advancedfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($advancedfeed->getItemPrice());
    }
} elseif ($shopping === 'super-feed') {
    if ($moomins->getMoney() >= $superfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($superfeed->getItemPrice());
    }
} elseif ($shopping === 'premium-feed') {
    if ($moomins->getMoney() >= $premiumfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($watergallon->getItemPrice());
    }
}

//=================================================================
// INVENTORY
//=================================================================

$itemUse = $_POST['inventory'] ?? null;

if ($itemUse === 'basic-water') {
    $basicwater->use();
} elseif ($itemUse === 'water-gallon') {
    $watergallon->use();
} elseif ($itemUse === 'premium-water') {
    $premiumwater->use();
}

if ($itemUse === 'basic-feed') {
    $basicfeed->use();
} elseif ($itemUse === 'medium-feed') {
    $mediumfeed->use();
} elseif ($itemUse === 'advanced-feed') {
    $advancedfeed->use();
} elseif ($itemUse === 'super-feed') {
    $superfeed->use();
} elseif ($itemUse === 'premium-feed') {
    $premiumfeed->use();
}

//=================================================================
// STRESS TEST
//=================================================================
$teste = $_POST['teste'] ?? null;
if ($teste === 'moomins1') {
    $moomins->addMoney(50);
} elseif ($teste === 'moomins2') {
    $moomins->addMoney(100);
} elseif ($teste === 'moomins3') {
    $moomins->addMoney(500);
} elseif ($teste === 'resetArray') {
    $inventory->removeAllItens();
} elseif ($teste === 'resetSession') {
    session_destroy();
    session_unset();
    exit;
}

header('Location: Game.php');
