<?php

namespace App\Game;

require_once __DIR__ . '../../../vendor/autoload.php';

use App\Animal\Dokkaebi;
use App\Config\MoneyTransaction;
use App\Animal\Essentials\Bowl;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['dokkaebi'])) {
    $_SESSION['dokkaebi'] = new Dokkaebi();
    $_SESSION['dokkaebi']->setName("DokkaebiBiyooTeste");
}
$dokkaebi = $_SESSION['dokkaebi'];

if (!isset($_SESSION['bowl'])) {
    $_SESSION['dokkaebi'] = new Bowl();
}
$bowl = $_SESSION['bowl'];

if (!isset($_SESSION['mooney'])) {
    $_SESSION['mooney'] = new MoneyTransaction();
}
$mooney = $_SESSION['mooney'];

$dokkaebi->updateNeeds();
$dokkaebi->addAge(0.01);
$dokkaebi->setState("aging ...");

echo json_encode([
'mooney' => $mooney->getMoney(),
'age' => $dokkaebi->getAge(),
'hunger' => $dokkaebi->getHunger(),
'thirst' => $dokkaebi->getThirst(),
'sleep' => $dokkaebi->getSleep(),
'state' => $dokkaebi->getState(),
'bowlfeed' => $bowl->checkFeedFill(),
'bowlwater' => $bowl->checkWaterFill()
]);
