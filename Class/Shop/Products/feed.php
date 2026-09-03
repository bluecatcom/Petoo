<?php

namespace Products;

use App\User\User;
use App\User\Itens;

class Feed implements Shop
{
    private User $user;
    private Itens $itens;
    private float $price = 10.0;
    //
    public function buy()
    {
        if ($user->money > 0) {
            if ($user->viewmoney() >= $itemvalue) {
                $itens->getItem(BasicFeed);
            }
        } else {
            # impedir...
        }
    }
    //
    public function sell()
    {
        if ($user->money > 0) {
            # comprar...
        } else {
            # impedir...
        }
    }
}
