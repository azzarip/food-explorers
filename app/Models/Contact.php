<?php

namespace App\Models;

use App\Models\Meetup;
use Azzarip\Teavel\Models\Contact as BaseContact;

class Contact extends BaseContact
{
    protected $guarded = [];

    public function meetups()
    {
        return $this->belongsToMany(Meetup::class)->withTimestamps();
    }

}
