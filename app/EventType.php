<?php

namespace App;

enum EventType: int
{
    case Restaurant = 1;
    case Bar = 2;
    case Adventure = 3;
    case Menu = 4; 
    case Tasting = 5;



    public function hoursToEnd(): float
    {
        return match($this) {
            self::Restaurant => 2.5,
            self::Bar => 2.5,
            self::Adventure => 48,
            self::Menu => 2.5,
            self::Tasting => 2,
        };
    }
}
