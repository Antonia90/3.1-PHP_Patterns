<?php
namespace App\Items;
class Key implements Item
{
    public function take(): void
    {
        echo "Cogiendo las llaves...<br>";
    }
}
