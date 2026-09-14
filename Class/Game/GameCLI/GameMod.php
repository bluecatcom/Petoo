<?php

namespace App\Game\GameCLI;

require_once __DIR__ . '/../bootstrap.php';

?>

<main>

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
    
</main>