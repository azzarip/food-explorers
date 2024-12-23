<?php

namespace App\Models;

use App\HasLocale;
use App\Models\Event;
use Azzarip\Teavel\Models\Contact as BaseContact;
use Illuminate\Contracts\Translation\HasLocalePreference;

class Contact extends BaseContact implements HasLocalePreference
{
    use HasLocale;

    protected $guarded = [];

    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

    public function lastEvent()
    {
        return $this->belongsToMany(Event::class)
        ->orderBy('scheduled_at', 'desc')
        ->limit(1);
    }

    public function getPoints()
    {
        return $this->events()->count();
    }

}
