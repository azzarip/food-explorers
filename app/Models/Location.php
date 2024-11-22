<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function LastEvent()
    {
        return $this->hasOne(Event::class)->latestOfMany('scheduled_at');
    }
}
