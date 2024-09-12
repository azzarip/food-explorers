<?php

namespace App;

trait Communicable
{

    const PREFERRED = 2;

    const CONFIRMED = 1;

    const SPEAKS_ENGLISH = 4;
    const SPEAKS_GERMAN = 8;

    public function setPreferredLocale(string $preferredLocale)
    {

        if($preferredLocale == 'en') {
            $this->communication |= self::CONFIRMED + self::PREFERRED;
            return $this->save();
        }

        if($preferredLocale == 'de') {
            $this->communication &= ~(self::CONFIRMED + self::PREFERRED); //clears first two bits
            $this->communication |= self::CONFIRMED;
            return $this->save();
        }

        throw new \InvalidArgumentException('Invalid locale: only de or en accepted');
    }

    public function getLocaleAttribute()
    {
        if(! $this->has_set_locale)
        {
            return null;
        }

        return ($this->communication & self::PREFERRED) ? 'en' : 'de';
    }


    public function addLocale(string $locale)
    {
        if(! $this->has_set_locale)
        {
            $this->setPreferredLocale($locale);
        }

        if($locale == 'en') {
            $this->communication |= self::SPEAKS_ENGLISH;
            return $this->save();
        }

        if($locale == 'de') {
            $this->communication |= self::SPEAKS_GERMAN;
            return $this->save();
        }

        throw new \InvalidArgumentException('Invalid locale: only de or en accepted');
    }

    public function speaks(string $locale)
    {
        if(! $this->has_set_locale)
        {
            return null;
        }

        if($locale == 'en') {
            return (bool) ($this->communication & self::SPEAKS_ENGLISH);
        }

        if($locale == 'de') {
            return (bool) ($this->communication & self::SPEAKS_GERMAN);
        }

        throw new \InvalidArgumentException('Invalid locale: only de or en accepted');
    }

    public function getHasSetLocaleAttribute(): bool
    {
        return (bool) $this->communication & self::CONFIRMED;
    }
}
