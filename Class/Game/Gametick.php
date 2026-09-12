<?php

namespace App\Game;

require_once 'vendor/autoload.php';

session_start();

use App\Animal\Dokkaebi;

if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("DokkaebiBiyooTeste");
}
$dokkaebi = $_SESSION['dokkaebi'];

$dokkaebi->updateNeeds();
$dokkaebi->addAge(0.01);
$dokkaebi->setState("Envelheceu ...");
