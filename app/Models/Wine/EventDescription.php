<?php

namespace App\Models\Wine;

use Illuminate\Database\Eloquent\Model;

class EventDescription extends Model
{
    protected $table = 'wine_event_description';

    public function tasting()
    {
        return $this->belongsTo(Tasting::class, 'event_id');
    }

    public function getTextAttribute()
    {
        $locale = app()->getLocale();
        return $this->{$locale} ?? $this->en;
    }
}
