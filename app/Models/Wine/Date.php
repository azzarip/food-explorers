<?php

namespace App\Models\Wine;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Date extends Model
{
    protected $table = 'wine_dates';
    protected $casts = [
        'date' => 'date', 
    ];

       public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
       public function startAt(): Attribute
    {
        return Attribute::get(function () {
            if (!$this->date || !$this->start_time) return null;
            return Carbon::parse($this->date->format('Y-m-d') . ' ' . $this->start_time);
        });
    }

    public function endAt(): Attribute
    {
        return Attribute::get(function () {
            if (!$this->date || !$this->end_time) return null;
            return Carbon::parse($this->date->format('Y-m-d') . ' ' . $this->end_time);
        });
    }

    public function getFormattedAttribute(): string|null     
    {
    if (! $this->date || ! $this->start_time) {
        return null;
    }

    $date = Carbon::parse($this->date);
    $time = Carbon::parse($this->start_time);

    return $date->format('d-m-Y') . ' ' . $time->format('H:i');
    }
}
