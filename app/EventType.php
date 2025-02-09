<?php

namespace App;

enum EventType: int
{
    case Unlisted = 0;
    case Restaurant = 1;
    case Bar = 2;
    case Adventure = 3;
    case Menu = 4; 
    case Tasting = 5;



    public function hoursToEnd(): float
    {
        return match($this) {
            self::Adventure => 48,
            self::Tasting => 2,
            default => 2.5,
        };
    }
}
