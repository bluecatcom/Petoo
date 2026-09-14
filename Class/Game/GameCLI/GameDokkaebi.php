<?php

namespace App\Game\GameCLI;

use App\Animal\Dokkaebi;

require_once __DIR__ . '/../bootstrap.php';

//=================================================================
// DOKKAEBI CLI
//=================================================================

if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("Biyoo");
}

$biyoo = $_SESSION['dokkaebi'];

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

</main>
