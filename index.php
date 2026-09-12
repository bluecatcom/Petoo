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

require_once __DIR__ . '/vendor/autoload.php';

session_start();

//=================================================================
// SESSÕES DE OBJETOS DO SISTEMA
//=================================================================

var_dump(class_exists(\App\Products\Water\WaterGallon::class));
var_dump(class_exists(\App\Products\Water\BasicWater::class));
var_dump(class_exists(\App\Products\Water\PremiumWater::class));


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
    $_SESSION['basicwater'] = new BasicWater($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$basicwater = $_SESSION['basicwater'];

//=================================================================
// WATER GALLON
//=================================================================
if (!isset($_SESSION['watergallon'])) {
    $_SESSION['watergallon'] = new WaterGallon($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$watergallon = $_SESSION['watergallon'];

//=================================================================
// PREMIUM WATER
//=================================================================
if (!isset($_SESSION['premiumwater'])) {
    $_SESSION['premiumwater'] = new PremiumWater($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$premiumwater = $_SESSION['premiumwater'];

//=================================================================
// BASIC FEED
//=================================================================
if (!isset($_SESSION['basicfeed'])) {
    $_SESSION['basicfeed'] = new BasicFeed($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$basicfeed = $_SESSION['basicfeed'];

//=================================================================
// MEDIUM FEED
//=================================================================
if (!isset($_SESSION['mediumfeed'])) {
    $_SESSION['mediumfeed'] = new MediumFeed($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$mediumfeed = $_SESSION['mediumfeed'];

//=================================================================
// ADVANCED FEED
//=================================================================
if (!isset($_SESSION['advancedfeed'])) {
    $_SESSION['advancedfeed'] = new AdvancedFeed($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$advancedfeed = $_SESSION['advancedfeed'];

//=================================================================
// SUPER FEED
//=================================================================
if (!isset($_SESSION['superfeed'])) {
    $_SESSION['superfeed'] = new SuperFeed($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$superfeed = $_SESSION['superfeed'];

//=================================================================
// PREMIUM FEED
//=================================================================
if (!isset($_SESSION['premiumfeed'])) {
    $_SESSION['premiumfeed'] = new PremiumFeed($_SESSION['inventory'], $_SESSION['mooney'], $_SESSION['dokkaebi']);
}
$premiumfeed = $_SESSION['premiumfeed'];


//=================================================================
// PROCESSAMENTO DE FORMULARIO
//=================================================================

//=================================================================
// SHOPPING
//=================================================================
$shopping = $_POST['shopping'] ?? null;

//=================================================================
// WATER
//=================================================================
if ($shopping === 'basicwater') {
    try {
        $basicwater->buy();
    } catch (\Throwable $th) {
        //throw $th;
    }
} elseif ($shopping === 'watergallon') {
    if ($watergallon->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($watergallon->getItemPrice());
        $inventory->addItem("water-gallon");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
} elseif ($shopping === 'premiumwater') {
    if ($premiumwater->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($premiumwater->getItemPrice());
        $inventory->addItem("premium-water");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
}

//=================================================================
// FEED
//=================================================================
if ($shopping === 'basicfeed') {
    if ($basicfeed->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($basicfeed->getItemPrice());
        $inventory->addItem("basic-feed");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
} elseif ($shopping === 'mediumfeed') {
    if ($mediumfeed->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($mediumfeed->getItemPrice());
        $inventory->addItem("medium-feed");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
} elseif ($shopping === 'advancedfeed') {
    if ($advancedfeed->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($advancedfeed->getItemPrice());
        $inventory->addItem("advanced-feed");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
} elseif ($shopping === 'superfeed') {
    if ($superfeed->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($superfeed->getItemPrice());
        $inventory->addItem("super-feed");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
} elseif ($shopping === 'premiumfeed') {
    if ($premiumfeed->getItemPrice() <= $mooney->getMoney()) {
        $mooney->removeMoney($premiumfeed->getItemPrice());
        $inventory->addItem("premium-feed");
    } else {
        echo"You dont have Mooneys to buy that!";
    }
}

//=================================================================
// INVENTARIO
//=================================================================

$usodeitens = $_POST['Inventario'] ?? null;

if ($usodeitens === 'basicwater') {
    $basicwater->use();
} elseif ($usodeitens === 'watergallon') {
    $watergallon->use();
} elseif ($usodeitens === 'premiumwater') {
    $premiumwater->use();
}

if ($usodeitens === 'basicfeed') {
    $basicfeed->use();
} elseif ($usodeitens === 'mediumfeed') {
    $mediumfeed->use();
} elseif ($usodeitens === 'advancedfeed') {
    $advancedfeed->use();
} elseif ($usodeitens === 'superfeed') {
    $superfeed->use();
} elseif ($usodeitens === 'premiumfeed') {
    $premiumfeed->use();
}

//=================================================================
// STRESS TEST
//=================================================================
$stresstest = $_POST['stresstest'] ?? null;
if ($stresstest === 'sesh') {
    echo"Esse botão n faz nada";
} elseif ($stresstest === 'dinheiro') {
    $mooney->addMoney(50);
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
    
    <script>
        setInterval(() => {
            fetch("/Game/Gametick.php")
        }, 500);
    </script>
    -->
    <!-- 
    =================================================================
    INVENTORY
    =================================================================
    -->
    <form method="post">
    <div class="inventory">
    <div class="water">

    <?php if (false !== $inventory->hasItem("basic-water")) : ?>
        <button type="submit" name="Inventario" value="basicwater">use Basic water</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("water-gallon")) : ?>
        <button type="submit" name="Inventario" value="watergallon">use Water gallon</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-water")) : ?>
        <button type="submit" name="Inventario" value="premiumwater">Use Premium water</button>
    <?php endif; ?>

    </div>
    <div class="feed">

    <?php if (false !== $inventory->hasItem("basic-feed")) : ?>
        <button type="submit" name="Inventario" value="basicfeed">use Basic feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("medium-feed")) : ?>
        <button type="submit" name="Inventario" value="mediumfeed">use Medium feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("advanced-feed")) : ?>
        <button type="submit" name="Inventario" value="advancedfeed">use Advanced feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("super-feed")) : ?>
        <button type="submit" name="Inventario" value="superfeed">use Super feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-feed")) : ?>
        <button type="submit" name="Inventario" value="premiumfeed">use Premium feed</button>
    <?php endif; ?>

    </div>
    <div class="berry">

    </div>
    <div class="special">

    </div>
    </div>
    </form>

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
            50 reais ...
        </button>

    </div>
    </form>

    <form>
    <div class="Status">


        <h2> USER </h2>

    <div class="Usuario">

        <label>
            Dinheiro
        </label>
        <?= $mooney->getMoney(); ?> <br> </br>

        <label>
            Inventario
        </label>
        <?php print_r($inventory->getItens()); ?> <br> </br>

    </div>
    <div class="Pet">

        <h2> PET </h2>

        <label>
            Nome
        </label>
        <?= $dokkaebi->getName(); ?> <br> </br>

        <label>
            Idade
        </label>
        <?= $dokkaebi->getAge(); ?> <br> </br>

        <label>
            Hunger
        </label>
        <?= $dokkaebi->getHunger(); ?> <br> </br>

        <label>
            Thirst
        </label>
        <?= $dokkaebi->getThirst(); ?> <br> </br>

        <label>
            Sleep
        </label>
        <?= $dokkaebi->getSleep(); ?> <br> </br>

        <label>
            estado
        </label>
        <?= $dokkaebi->getState(); ?> <br> </br>

        <label>
            Felicidade
        </label>
        <?= $dokkaebi->getHappy(); ?> <br> </br>

    </div>
    <div class="sla">

    </div>

    </div>
    </form>
    

</body>
</html>