<?php

namespace App\Models;

use App\Models\Meetup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function meetups()
    {
        return $this->hasMany(Meetup::class);
    }

    public function lastMeetup()
    {
        return $this->hasOne(Meetup::class)->latestOfMany('scheduled_at');
    }
}
