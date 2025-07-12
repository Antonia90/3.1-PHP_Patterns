<?php
namespace App\Items;
class TransportCard implements Item
{
    public function take(): void
    {
        echo "Cogiendo la tarjeta del bus...<br>";
    }
}
