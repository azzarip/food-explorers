<?php

namespace App\Models;

use App\Communicable;
use App\Models\Meetup;
use Azzarip\Teavel\Models\Contact as BaseContact;

class Contact extends BaseContact
{
    use Communicable;

    protected $guarded = [];

    public function meetups()
    {
        return $this->belongsToMany(Meetup::class)->withTimestamps();
    }

}
