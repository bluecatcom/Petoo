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
        $inventory->addItem('basic-water');
        $moomins->removeMoney($basicwater->getItemPrice());
    }
} if ($shopping === 'basic-water5') {
    if ($moomins->getMoney() >= ($basicwater->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('basic-water');
            $a++;
        }
        $moomins->removeMoney($basicwater->getItemPrice() * 5);
    }
} if ($shopping === 'basic-water10') {
    if ($moomins->getMoney() >= ($basicwater->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('basic-water');
            $a++;
        }
        $moomins->removeMoney($basicwater->getItemPrice() * 10);
    }
}

if ($shopping === 'water-gallon') {
    if ($moomins->getMoney() >= $watergallon->getItemPrice()) {
        $inventory->addItem('water-gallon');
        $moomins->removeMoney($watergallon->getItemPrice());
    }
}
if ($shopping === 'water-gallon5') {
    if ($moomins->getMoney() >= ($watergallon->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('water-gallon');
            $a++;
        }
        $moomins->removeMoney($watergallon->getItemPrice() * 5);
    }
}
if ($shopping === 'water-gallon10') {
    if ($moomins->getMoney() >= ($watergallon->getItemPrice() * 10)) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('water-gallon');
            $a++;
        }
        $moomins->removeMoney($watergallon->getItemPrice() * 10);
    }
}


if ($shopping === 'premium-water') {
    if ($moomins->getMoney() >= $premiumwater->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($premiumwater->getItemPrice());
    }
}
if ($shopping === 'premium-water5') {
    if ($moomins->getMoney() >= ($premiumwater->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('premium-water');
            $a++;
        }
        $moomins->removeMoney($premiumwater->getItemPrice() * 5);
    }
}
if ($shopping === 'premium-water10') {
    if ($moomins->getMoney() >= ($premiumwater->getItemPrice() * 10)) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('premium-water');
            $a++;
        }
        $moomins->removeMoney($premiumwater->getItemPrice() * 10);
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
}
if ($shopping === 'basic-feed5') {
    if ($moomins->getMoney() >= ($basicfeed->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('basic-feed');
            $a++;
        }
        $moomins->removeMoney($basicfeed->getItemPrice() * 5);
    }
}
if ($shopping === 'basic-feed10') {
    if ($moomins->getMoney() >= $basicfeed->getItemPrice() * 10) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('basic-feed');
            $a++;
        }
        $moomins->removeMoney($basicfeed->getItemPrice() * 10);
    }
}

if ($shopping === 'medium-feed') {
    if ($moomins->getMoney() >= $mediumfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($mediumfeed->getItemPrice());
    }
}
if ($shopping === 'medium-feed5') {
    if ($moomins->getMoney() >= ($mediumfeed->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('medium-feed');
            $a++;
        }
        $moomins->removeMoney($mediumfeed->getItemPrice() * 5);
    }
}
if ($shopping === 'medium-feed10') {
    if ($moomins->getMoney() >= $mediumfeed->getItemPrice() * 10) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('medium-feed');
            $a++;
        }
        $moomins->removeMoney($mediumfeed->getItemPrice() * 10);
    }
}

if ($shopping === 'advanced-feed') {
    if ($moomins->getMoney() >= $advancedfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($advancedfeed->getItemPrice());
    }
}
if ($shopping === 'advanced-feed5') {
    if ($moomins->getMoney() >= ($advancedfeed->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('advanced-feed');
            $a++;
        }
        $moomins->removeMoney($advancedfeed->getItemPrice() * 5);
    }
}
if ($shopping === 'advanced-feed10') {
    if ($moomins->getMoney() >= $advancedfeed->getItemPrice() * 10) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('advanced-feed');
            $a++;
        }
        $moomins->removeMoney($advancedfeed->getItemPrice() * 10);
    }
}

if ($shopping === 'super-feed') {
    if ($moomins->getMoney() >= $superfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($superfeed->getItemPrice());
    }
}
if ($shopping === 'super-feed5') {
    if ($moomins->getMoney() >= ($superfeed->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('super-feed');
            $a++;
        }
        $moomins->removeMoney($superfeed->getItemPrice() * 5);
    }
}
if ($shopping === 'super-feed10') {
    if ($moomins->getMoney() >= $superfeed->getItemPrice() * 10) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('super-feed');
            $a++;
        }
        $moomins->removeMoney($superfeed->getItemPrice() * 10);
    }
}

if ($shopping === 'premium-feed') {
    if ($moomins->getMoney() >= $premiumfeed->getItemPrice()) {
        $inventory->addItem($shopping);
        $moomins->removeMoney($premiumfeed->getItemPrice());
    }
}
if ($shopping === 'premium-feed5') {
    if ($moomins->getMoney() >= ($premiumfeed->getItemPrice() * 5)) {
        $a = 0;
        while ($a != 5) {
            $inventory->addItem('premium-feed');
            $a++;
        }
        $moomins->removeMoney($premiumfeed->getItemPrice() * 5);
    }
}
if ($shopping === 'premium-feed10') {
    if ($moomins->getMoney() >= $premiumfeed->getItemPrice() * 10) {
        $a = 0;
        while ($a != 10) {
            $inventory->addItem('premium-feed');
            $a++;
        }
        $moomins->removeMoney($premiumfeed->getItemPrice() * 10);
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
