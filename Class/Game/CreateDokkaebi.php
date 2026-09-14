<?php

namespace App\Game;

require_once __DIR__ . '/bootstrap.php';

use App\Config\User;

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = new User();
}

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = $username;
}

$username = $_POST['username'] ?? '';
$user = $_SESSION['user'] ?? '';

$user->setName($username);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello <?= $user->getName() ?>, Welcome</h1>

    <p> Now let's create your Dokkaebi; choose the one you like best.</p>

    <form method="post" action="Game.php">
    
    <div class="CreateDokkaebi">
    
    <label>
        Name:
    </label>
    <input type="text" name="dokkaebiName"> <br> </br>

    <label>
        Available Dokkaebis:
    </label>

    <input type="radio" name="dokkaebiType" value="biyoo" onclick="mostrarImagem1()">
    <label for="biyoo">
        Biyoo <?php $dokkaebichosen = 'biyoo' ?>
    </label>
    
    <input type="radio" name="dokkaebiType" value="bihyung" onclick="mostrarImagem2()">
    <label for="bihyung">
        Bihyung <?php $dokkaebichosen = 'bihyung' ?>
    </label>

    <input type="radio" name="dokkaebiType" value="youngki" onclick="mostrarImagem3()">
    <label for="youngki">
        Youngki <?php $dokkaebichosen = 'youngki' ?>
    </label>
    
    <input type="radio" name="dokkaebiType" value="biryu" onclick="mostrarImagem4()">
    <label for="biryu">
        Biryu   <?php $dokkaebichosen = 'biryu' ?>
    </label>

    <button>Confirm</button>
    <input type="reset" value="Cancel">
    </div>
    </form>

    <img id="adoptionEmpty" src="../../Assets/AdoptionEmpty.png" style="display: block;">
    <img id="adoptionImgBiyoo" src="../../Assets/AdoptionBiyoo.png" style="display: none;">
    <img id="adoptionImgBihyung" src="../../Assets/AdoptionBihyung.png" style="display: none;">
    <img id="adoptionImgYoungki" src="../../Assets/AdoptionYoungki.png" style="display: none;">
    <img id="adoptionImgBiryu" src="../../Assets/AdoptionBiryu.png" style="display: none;">

    <script>
    function mostrarImagem1() {
        document.getElementById("adoptionEmpty").style.display = "none";
        document.getElementById("adoptionImgBiyoo").style.display = "block";
        document.getElementById("adoptionImgBihyung").style.display = "none";
        document.getElementById("adoptionImgBiryu").style.display = "none";
        document.getElementById("adoptionImgYoungki").style.display = "none";
    }
    function mostrarImagem2() {
        document.getElementById("adoptionEmpty").style.display = "none";
        document.getElementById("adoptionImgBiyoo").style.display = "none";
        document.getElementById("adoptionImgBihyung").style.display = "block";
        document.getElementById("adoptionImgBiryu").style.display = "none";
        document.getElementById("adoptionImgYoungki").style.display = "none";
    }
    function mostrarImagem3() {
        document.getElementById("adoptionEmpty").style.display = "none";
        document.getElementById("adoptionImgBiyoo").style.display = "none";
        document.getElementById("adoptionImgBihyung").style.display = "none";
        document.getElementById("adoptionImgBiryu").style.display = "none";
        document.getElementById("adoptionImgYoungki").style.display = "block";
    }
    function mostrarImagem4() {
        document.getElementById("adoptionEmpty").style.display = "none";
        document.getElementById("adoptionImgBiyoo").style.display = "none";
        document.getElementById("adoptionImgBihyung").style.display = "none";
        document.getElementById("adoptionImgBiryu").style.display = "block";
        document.getElementById("adoptionImgYoungki").style.display = "none";
    }
    </script>

</body>
</html>