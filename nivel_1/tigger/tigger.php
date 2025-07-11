<?php

declare(strict_types=1);

class Tigger
{
    private static ?Tigger $instance = null;
    private int $roarTimes = 0;


    private function __construct()
    {
        echo "Building character...<br>";
    }

    public function roar(): void
    {
        echo "Grrr! <br>";
        $this->roarTimes++;
    }

    public static function getInstance(): self
    {

        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function getCounter(): int
    {
        return $this->roarTimes;
    }
    public function __clone()
    {
        trigger_error("Operación Invalida: No puedes clonar una instancia de " . get_class($this) . " class.", E_USER_ERROR);
    }
}
