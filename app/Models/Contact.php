<?php

namespace App\Models;

use App\HasLocale;
use App\Models\Event;
use Azzarip\Teavel\Models\Contact as BaseContact;

class Contact extends BaseContact
{
    use HasLocale;

    protected $guarded = [];

    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

}
