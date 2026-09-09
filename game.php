<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="Funções">
        <form method="post">

            <button type="submit" name="alimentacao" value="comer">
                Comer comida
            </button>
            
            <button type="submit" name="alimentacao" value="beber">
            Beber água
            </button>
            
            <button type="submit" name="alimentacao" value="dormir">
                Dormir
            </button>

        </form>
    </div>
</body>
</html>

<?php

$acao = $_POST['acao'] ?? null;

if ($acao === 'comer') {
    //$animal->eat();
}

if ($acao === 'beber') {
    //$animal->drink();
}

if ($acao === 'dormir') {
    //$animal->sleep();
}
