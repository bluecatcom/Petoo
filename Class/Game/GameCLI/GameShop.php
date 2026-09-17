<?php

namespace App\Game\GameCLI;

require_once __DIR__ . '/../bootstrap.php';

    //=================================================================
    // SHOP CLI
    //=================================================================

?>

<main>
    <h3> Shop </h3>

    <form method="post" action="GameProcess.php">
        <div class="Shop">
            <div class="water">

                <h4> Water session </h4>

                <label>
                    Basic water | Price: 15 Moomins
                </label>
                <button type="submit" name="shopping" value="basic-water">Buy</button>
                <button type="submit" name="shopping" value="basic-water5">Buy | 5x</button>
                <button type="submit" name="shopping" value="basic-water10">Buy | 10x</button>
                <br> </br>

                <label>
                    Water Gallon | Price: 40 Moomins
                </label>
                <button type="submit" name="shopping" value="water-gallon">Buy</button>
                <button type="submit" name="shopping" value="water-gallon5">Buy | 5x</button>
                <button type="submit" name="shopping" value="water-gallon10">Buy | 10x</button>
                <br> </br>

                <label>
                    Premium Water | Price: 100 Moomins
                </label>
                <button type="submit" name="shopping" value="premium-water">Buy</button>
                <button type="submit" name="shopping" value="premium-water5">Buy | 5x</button>
                <button type="submit" name="shopping" value="premium-water10">Buy | 10x</button>
                <br> </br>
            </div>

            <div class="feed">
                <h4> Feed session </h4>

                <label>
                    Basic Feed | Price: 10 Moomins
                </label>
                <button type="submit" name="shopping" value="basic-feed">Buy</button>
                <button type="submit" name="shopping" value="basic-feed5">Buy | 5x</button>
                <button type="submit" name="shopping" value="basic-feed10">Buy | 10x</button>
                <br> </br>

                <label>
                    Medium Feed | Price: 25 Moomins
                </label>
                <button type="submit" name="shopping" value="medium-feed">Buy</button>
                <button type="submit" name="shopping" value="medium-feed5">Buy | 5x</button>
                <button type="submit" name="shopping" value="medium-feed10">Buy | 10x</button>
                <br> </br>

                <label>
                    Advanced Feed  | Price: 40 Moomins
                </label>
                <button type="submit" name="shopping" value="advanced-feed">Buy</button>
                <button type="submit" name="shopping" value="advanced-feed5">Buy | 5x</button>
                <button type="submit" name="shopping" value="advanced-feed10">Buy | 10x</button>
                <br> </br>

                <label>
                    Super Feed | Price: 75 Moomins
                </label>
                <button type="submit" name="shopping" value="super-feed">Buy</button>
                <button type="submit" name="shopping" value="super-feed5">Buy | 5x</button>
                <button type="submit" name="shopping" value="super-feed10">Buy | 10x</button>
                <br> </br>

                <label>
                    Premium Feed | Price: 100 Moomins
                </label>
                <button type="submit" name="shopping" value="premium-feed">Buy</button>
                <button type="submit" name="shopping" value="premium-feed5">Buy | 5x</button>
                <button type="submit" name="shopping" value="premium-feed10">Buy | 10x</button>
                <br> </br>
            </div>

            <div class="berry">

            </div>
            <div class="special">
        
            </div>
        </div>
    </form>

</main>