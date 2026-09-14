<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dokkaebi</title>
</head>
<body>
    
    <h1>Bem vindo(a) ao jogo!</h1>

    <br>
    
    <form method="post" action="Class/Game/CreateDokkaebi.php">
    
    <h4>Por favor digite seu nome:</h4>
    <input type="text" name="username">
    <button type="submit">Confirm</button>
    <input type="reset" value="Cancel">

    </form>
</body>
</html>
