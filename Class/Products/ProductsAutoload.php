<?php

namespace App\Products;

final class ProductsAutoload
{
    public function __construct()
    {
        if (!isset($_SESSION['products'])) {
            $_SESSION['products'] = [
                // Water
                'basic-water' => new BasicWater(),
                'water-gallon' => new WaterGallon(),
                'premium-water' => new PremiumWater(),
                // Feed
                'basic-feed' => new BasicFeed(),
                'medium-feed' => new MediumFeed(),
                'advanced-feed' => new AdvancedFeed(),
                'super-feed' => new SuperFeed(),
                'premium-feed' => new PremiumFeed(),
                // Berry
                // Especial
            ];
        }
    }
}
