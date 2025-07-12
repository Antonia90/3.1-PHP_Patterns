<?php
namespace App\Items;
class Smartphone implements Item {
    public function take() : void {
        echo "Cogiendo el teléfono...<br>";
    }
}