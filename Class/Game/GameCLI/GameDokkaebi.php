<?php

namespace App\Game\GameCLI;

use App\Animal\Dokkaebi;
use App\Animal\Essentials\Bowl;

require_once __DIR__ . '/../bootstrap.php';

//=================================================================
// DOKKAEBI CLI
//=================================================================

if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
}

if (!isset($_SESSION['dokkaebiName'])) {
    $_SESSION['dokkaebiName'];
}
$dokkaebiName = $_SESSION['dokkaebiName'] ?? '';
$biyoo = $_SESSION['dokkaebi'] ?? '';


$biyoo->setName($dokkaebiName);

if (!isset($_SESSION['bowl'])) {
    $_SESSION['bowl'] = new Bowl($biyoo);
}
$bowl = $_SESSION['bowl'] ?? '';

?>

<main>
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

        <label>
            Bowls:
        </label>
        <span id="bowlfeed">
            <?= $bowl->checkFeedFill() ?>
        </span> <br> </br>
        <span id="bowlwater">
            <?= $bowl->checkWaterFill() ?>
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
            document.getElementByID('bowlfeed').textContent = data.bowlfeed;
            document.getElementByID('bowlwater').textContent = data.bowlwater;
        }
            setInterval(updateDokkaebi, 5000);
        </script>

        <p>=================================================================</p>

</main>
