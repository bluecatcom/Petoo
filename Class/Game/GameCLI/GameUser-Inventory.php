<?php

namespace App\Game\GameCLI;

use App\Config\User;
use App\Config\ItemTransaction;
use App\Config\MoneyTransaction;

require_once __DIR__ . '/../bootstrap.php';

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new User();
}
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = new ItemTransaction();
}
if (!isset($_SESSION['moomins'])) {
    $_SESSION['moomins'] = new MoneyTransaction();
}

$user = $_SESSION['user'];
$moomins = $_SESSION['moomins'];
$inventory = $_SESSION['inventory'];

?>

<main>
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
        <button type="submit" name="inventory" value="basic-water"> <?= $inventory->muchItem("basic-water"); ?>x | Basic Water</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("water-gallon")) : ?>
        <button type="submit" name="inventory" value="water-gallon"> <?= $inventory->muchItem("water-gallon"); ?>x | Water Gallon </button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-water")) : ?>
        <button type="submit" name="inventory" value="premium-water"> <?= $inventory->muchItem("premium-water"); ?>x | Premium Water</button>
    <?php endif; ?>

    </div>
    <div class="feed">

    <?php if (false !== $inventory->hasItem("basic-feed")) : ?>
        <button type="submit" name="inventory" value="basic-feed"> <?= $inventory->muchItem("basic-feed"); ?>x | Basic Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("medium-feed")) : ?>
        <button type="submit" name="inventory" value="medium-feed"> <?= $inventory->muchItem("medium-feed"); ?>x | Medium Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("advanced-feed")) : ?>
        <button type="submit" name="inventory" value="advanced-feed"> <?= $inventory->muchItem("advanced-feed"); ?>x | Advanced Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("super-feed")) : ?>
        <button type="submit" name="inventory" value="super-feed"> <?= $inventory->muchItem("super-feed"); ?>x | Super Feed</button>
    <?php endif; ?>

    <?php if (false !== $inventory->hasItem("premium-feed")) : ?>
        <button type="submit" name="inventory" value="premium-feed"> <?= $inventory->muchItem("premium-feed"); ?>x | Premium Feed</button>
    <?php endif; ?>

    </div>
    <div class="berry">

    </div>
    <div class="special">

    </div>
    </div>
    </form>

</main>