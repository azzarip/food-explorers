<?php

namespace App\Models;

use App\Communicable;
use App\Models\Event;
use Azzarip\Teavel\Models\Contact as BaseContact;

class Contact extends BaseContact
{
    use Communicable;

    protected $guarded = [];

    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

}
