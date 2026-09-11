<?php

namespace App\Game;

require_once 'vendor/autoload.php';

session_start();

use App\Animal\Animal;
use App\Animal\Dokkaebi;
use App\Animal\Config;
use App\Config\User;
use App\Config\MoneyTransaction;
use App\Config\ItemTransaction;
use App\Config\ShopTransaction;
use App\Products\BasicWater;

if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("DokkaebiBiyooTeste");
}

$dokkaebi = $_SESSION['dokkaebi'];

$needs = $dokkaebi->getNeeds();

$alimentacao = $_POST['alimentacao'] ?? null;

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

$status = $_POST['status'] ?? null;

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
    <title>My little dokkaebi</title>
</head>
<body>
    
    <div class="Funções">
        <form method="post">

            <button type="submit" name="alimentacao" value="comer">
                Dar comida
            </button>
            
            <button type="submit" name="alimentacao" value="beber">
                Dar água
            </button>
            
            <button type="submit" name="alimentacao" value="dormir">
                Colocar pra Dormir
            </button>

            <button type="submit" name="alimentacao" value="tempo">
                Passar o tempo
            </button>

        </form>
    </div>

    <div class="Informações">
    
    <label>
        Name:
    </label>
    <?= $needs['Name']; ?> <br>
    
    <label>
        Age:
    </label>
    <?= $dokkaebi->getAge(); ?> <br>
    
    <label>
        Hunger:
    </label>
    <?= $dokkaebi->getHunger(); ?> <br>
    
    <label>
        Thirst
    </label>
    <?= $dokkaebi->getThirst(); ?> <br>

    <label>
        Sleep:
    </label>
    <?= $dokkaebi->getSleep(); ?> <br>

    <label>
        State:
    </label>
    <?= $dokkaebi->getState(); ?> <br>

    </div>

</body>
</html>