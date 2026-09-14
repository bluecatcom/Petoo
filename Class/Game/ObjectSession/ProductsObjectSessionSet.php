<?php

namespace App\Game;

use App\Products\Water\BasicWater;
use App\Products\Water\WaterGallon;
use App\Products\Water\PremiumWater;
use App\Products\Feed\BasicFeed;
use App\Products\Feed\MediumFeed;
use App\Products\Feed\AdvancedFeed;
use App\Products\Feed\SuperFeed;
use App\Products\Feed\PremiumFeed;

require_once __DIR__ . '../../../..//vendor/autoload.php';

//=================================================================
// PRODUCTS OBJECT SESSIONS
//=================================================================

#

//=================================================================
// BASIC WATER
//=================================================================

if (!isset($_SESSION['basic-water'])) {
    $_SESSION['basic-water'] = new BasicWater($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$basicwater = $_SESSION['basic-water'];

//=================================================================
// WATER GALLON
//=================================================================

if (!isset($_SESSION['water-gallon'])) {
    $_SESSION['water-gallon'] = new WaterGallon($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$watergallon = $_SESSION['water-gallon'];

//=================================================================
// PREMIUM WATER
//=================================================================

if (!isset($_SESSION['premium-water'])) {
    $_SESSION['premium-water'] = new PremiumWater($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$premiumwater = $_SESSION['premium-water'];


#

//=================================================================
// BASIC FEED
//=================================================================

if (!isset($_SESSION['basic-feed'])) {
    $_SESSION['basic-feed'] = new BasicFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$basicfeed = $_SESSION['basic-feed'];

//=================================================================
// MEDIUM FEED
//=================================================================

if (!isset($_SESSION['medium-feed'])) {
    $_SESSION['medium-feed'] = new MediumFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$mediumfeed = $_SESSION['medium-feed'];

//=================================================================
// ADVANCED FEED
//=================================================================

if (!isset($_SESSION['advanced-feed'])) {
    $_SESSION['advanced-feed'] = new AdvancedFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$advancedfeed = $_SESSION['advanced-feed'];

//=================================================================
// SUPER FEED
//=================================================================

if (!isset($_SESSION['super-feed'])) {
    $_SESSION['super-feed'] = new SuperFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$superfeed = $_SESSION['super-feed'];

//=================================================================
// PREMIUM FEED
//=================================================================

if (!isset($_SESSION['premium-feed'])) {
    $_SESSION['premium-feed'] = new PremiumFeed($_SESSION['inventory'], $_SESSION['moomins'], $_SESSION['dokkaebi']);
}
$premiumfeed = $_SESSION['premium-feed'];
