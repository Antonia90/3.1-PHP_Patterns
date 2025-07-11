<?php

require_once 'tigger.php';

$tigger = Tigger::getInstance();
$repetitionTimes = random_int(1, 10);

for($i = 0; $i < $repetitionTimes; $i++){
    $tigger->roar();
}
echo "Tigger ha rugido {$tigger->getCounter()} veces.<br>";

$tigger2 = clone $tigger;
