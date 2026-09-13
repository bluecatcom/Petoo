<?php

namespace App\Game;

use App\Config\User;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;
use App\Animal\Animal;
use App\Animal\Dokkaebi;

require_once __DIR__ . '../../../vendor/autoload.php';

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
    $_SESSION['dokkaebi']->setName("Biyoo");
}
if (null !== ($_SESSION['message'] ?? null)) {
    $_SESSION['message'] = $message;
}

$biyoo = $_SESSION['dokkaebi'];
$user = $_SESSION['user'];
$inventory = $_SESSION['inventory'];
$moomins = $_SESSION['moomins'];
$message = "";

$needs = $biyoo->getNeeds();

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
    SHOP
    =================================================================
    -->

    <h3> Shop </h3>

    <form method="post" action="GameProcess.php">
    
    <div class="Shop">

    <div class="water">

        <h4> Water session </h4>

        <label>
            Basic water | Price: 15 Moomins
        </label>
        <button type="submit" name="shopping" value="basic-water">Buy</button> <br> </br>

        <label>
            Water Gallon | Price: 40 Moomins
        </label>
        <button type="submit" name="shopping" value="water-gallon">Buy</button> <br> </br>

        <label>
            Premium Water | Price: 100 Moomins
        </label>
        <button type="submit" name="shopping" value="premium-water">Buy</button> <br> </br>

    </div>

    <div class="feed">
        <h4> Feed session </h4>

        <label>
            Basic Feed | Price: 10 Moomins
        </label>
        <button type="submit" name="shopping" value="basic-feed">Buy</button> <br> </br>

        <label>
            Medium Feed | Price: 25 Moomins
        </label>
        <button type="submit" name="shopping" value="medium-feed">Buy</button> <br> </br>

        <label>
            Advanced Feed  | Price: 40 Moomins
        </label>
        <button type="submit" name="shopping" value="advanced-feed">Buy</button> <br> </br>

        <label>
            Super Feed | Price: 75 Moomins
        </label>
        <button type="submit" name="shopping" value="super-feed">Buy</button> <br> </br>

        <label>
            Premium Feed | Price: 100 Moomins
        </label>
        <button type="submit" name="shopping" value="premium-feed">Buy</button> <br> </br>
        
    </div>
    <div class="berry">

    </div>
    <div class="special">
        
    </div>
    </div>
    </form>

    <p>=================================================================</p>

    <div class="Status">
        <h4> User </h4>
    <div class="Usuario">
        <span id="moomins">
            <p> Dinheiro: <?= $moomins->getMoney(); ?> Mommins </p>
        <span>


    <!-- 
    =================================================================
    INVENTORY
    =================================================================
    -->

    <h4> Inventory </h4>
    <form method="post" action="GameProcess.php">
    <div class="inventory">
    <div class="water">

    <?php if (null == ($inventory->getItens())) : ?>
        <p> No Items ... </p>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("basic-water")) : ?>
        <button type="submit" name="inventory" value="basic-water">Basic Water</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("water-gallon")) : ?>
        <button type="submit" name="inventory" value="water-gallon">Water Gallon</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-water")) : ?>
        <button type="submit" name="inventory" value="premium-water">Premium Water</button>
    <?php endif; ?>

    </div>
    <div class="feed">

    <?php if (false !== $inventory->hasItem("basic-feed")) : ?>
        <button type="submit" name="inventory" value="basic-feed">Basic Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("medium-feed")) : ?>
        <button type="submit" name="inventory" value="medium-feed">Medium Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("advanced-feed")) : ?>
        <button type="submit" name="inventory" value="advanced-feed">Advanced Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("super-feed")) : ?>
        <button type="submit" name="inventory" value="super-feed">Super Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-feed")) : ?>
        <button type="submit" name="inventory" value="premium-feed">Premium Feed</button>
    <?php endif; ?>

    </div>
    <div class="berry">

    </div>
    <div class="special">

    <?php if (!empty(($inventory->getItens()))) : ?>
        <br> </br>
    <?php endif; ?>

    <?= print_r($inventory->getItens()); ?>
    </div>
    </div>
    </form>

    <p>=================================================================</p>

    </div>

    <div class="Pet">

        <h4> Dokkaebi </h4>

        <label>
            Name:
        </label>
        <?= $biyoo->getName(); ?> <br> </br>

        <label>
            Age:
        </label>
        <span id="age">
            <?= $biyoo->getAge() ?>
        </span> <br> </br>

        <label>
            Hunger:
        </label>
        <span id="hunger">
            <?= $biyoo->getHunger() ?>
        </span> <br> </br>

        <label>
            Thirst:
        </label>
        <span id="thirst">
            <?= $biyoo->getThirst() ?>
        </span> <br> </br>

        <label>
            Sleep:
        </label>
        <span id="sleep">
            <?= $biyoo->getSleep() ?>
        </span> <br> </br>

        <label>
            State:
        </label>
        <span id="state">
            <?= $biyoo->getState() ?>
        </span> <br> </br>

        <script>
            async function updateDokkaebi() {
            const response = await fetch('Gametick.php');
            const data = await response.json();

            document.getElementById('age').textContent = data.age;
            document.getElementById('hunger').textContent = data.hunger;
            document.getElementById('thirst').textContent = data.thirst;
            document.getElementById('sleep').textContent = data.sleep;
            document.getElementById('state').textContent = data.state;
            document.getElementById('moomins').textContet = data.moomins;
        }
            setInterval(updateDokkaebi, 5000);
        </script>

    <p>=================================================================</p>

    </div>

        <form method="post" action="GameProcess.php">
    <div class="Teste">

        <h4> Teste functions </h4>
        
        <button type="submit" name="teste" value="moomins1">
            50 moomins
        </button>

        <button type="submit" name="teste" value="moomins2">
            100 moomins
        </button>

        <button type="submit" name="teste" value="moomins3">
            500 moomins
        </button>

        <button type="submit" name="teste" value="resetArray">
            reset array
        </button>

        <button type="submit" name="teste" value="resetSession">
            reset Session
        </button>

    </div>
    </form>

    <p>=================================================================</p>
    
    <div class="Log">
        <h2> <?= $message ?> </h2>
    </div>
    </div>
    
</body>
</html>