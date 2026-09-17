<?php

namespace App\Animal\Essentials;

use App\Animal\Dokkaebi;

class Bowl extends Essentials
{
    protected string $name = "Bowl";
    protected string $type = "Bowl";
    protected int $feedcapacity = 200;
    protected int $feedfill = 0;
    protected int $watercapacity = 200;
    protected int $waterfill = 0;
    protected array $effectStack = [];
    private Dokkaebi $dokkaebi;

    public function __construct(Dokkaebi $dokkaebi)
    {
        $this->dokkaebi = $dokkaebi;
        parent::__construct($dokkaebi);
    }
}
