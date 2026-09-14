<?php

namespace App\Game;

require_once __DIR__ . '/bootstrap.php';

require_once __DIR__ . '/ObjectSession/ConfigObjectSessionSet.php';
require_once __DIR__ . '/ObjectSession/ProductsObjectSessionSet.php';


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
