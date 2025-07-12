<?php

declare(strict_types=1);
namespace App\Person;

use App\Items\Item;

class Person
{
    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function goingOut(): void
    {
        foreach ($this->items as $item) {
            echo $item->take();
        }
        echo "¡Saliendo de casa!<br>";
    }
}
