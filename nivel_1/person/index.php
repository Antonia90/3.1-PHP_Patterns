<?php

require 'vendor/autoload.php';

use App\Items\Wallet;
use App\Items\Smartphone;
use App\Items\Key;
use App\Items\TransportCard;
use App\Person\Person;

$wallet = new Wallet();
$smartphone = new Smartphone();
$key = new Key();
$transportCard = new TransportCard();

$items = [$wallet, $key, $smartphone, $transportCard];

$person1 = new Person($items);

$person1->goingOut();
