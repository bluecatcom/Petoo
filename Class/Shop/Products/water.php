<?php

namespace Products;

use App\Products\Shop;

class Water implements Shop
{
    public function comprar()
    {
        if ($user->money != 0 || $user->money > 0) {
            # comprar...
        } else {
            # impedir...
        }
    }
}
