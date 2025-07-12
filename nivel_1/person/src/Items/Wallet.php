<?php
namespace App\Items;

class Wallet implements Item
{

    public function take(): void
    {
        echo "Cogiendo la cartera... <br>";
    }
}
