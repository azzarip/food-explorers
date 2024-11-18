<?php

namespace App;

use InvalidArgumentException;

trait HasLocale
{
    public const int EN = 0;
    public const int DE = 1;

    public function setPreferredLocale(string $locale)
    {
        if($locale == 'en') {
            return $this->update(['locale' => self::EN]);
        }

        if($locale == 'de') {
            return $this->update(['locale' => self::DE]);
        }

        throw new InvalidArgumentException();

    }
    public function getLocaleAttribute($value) {        
        if($value === self::EN) {
            return 'en';
        }

        if($value === self::DE) {
            return 'de';
        }

        return null;
    }

    public function preferredLocale()
    {
        return $this->locale;
    }


    public function getHasLocaleAttribute(): bool
    {
        return (bool) $this->locale;
    }

    public function addLanguage($lang) {
        return $this->tag($lang);
    }

    public function removeLanguage($lang) {
        return $this->detag($lang);
    }

    public function speaks($lang): bool 
    {
        return $this->hasTag($lang);
    }
}
