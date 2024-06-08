<?php

namespace App\Models;

use App\Models\Event;
use Azzarip\Teavel\Models\Contact as BaseContact;

class Contact extends BaseContact
{

    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

    public function pastEvents()
    {
        return $this->belongsToMany(Event::class)
                    ->where('scheduled_at', '<', now()->startOfDay())
                    ->orderBy('scheduled_at', 'DESC')
                    ->withTimestamps();
    }

}
