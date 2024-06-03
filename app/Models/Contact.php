<?php

namespace App\Models;

use App\Models\Meetup;
use Illuminate\Auth\Authenticatable;
use Azzarip\Teavel\Models\Contact as BaseContact;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Contact extends BaseContact
{
    protected $guarded = [];

    public function meetups()
    {
        return $this->belongsToMany(Meetup::class)->withTimestamps();
    }
}
