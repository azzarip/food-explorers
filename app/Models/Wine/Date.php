<?php

namespace App\Models\Wine;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Date extends Model
{
    protected $table = 'wine_dates';
    protected $casts = [
        'date' => 'date', 
    ];

       public function tasting(): BelongsTo
    {
        return $this->belongsTo(Tasting::class, 'event_id');
    }
       public function startAt(): Carbon
    {
            if (!$this->date || !$this->start_time) return null;
            return Carbon::parse($this->date->format('Y-m-d') . ' ' . $this->start_time);
     
    }

    public function endAt(): Carbon
    {
        if (!$this->date || !$this->end_time) return null;
        return Carbon::parse($this->date->format('Y-m-d') . ' ' . $this->end_time);
    }

    public function scopeUpcomingNextDays(Builder $query, int $days = 30): Builder
{
    $start = Carbon::today('Europe/Zurich')->toDateString();
    $end   = Carbon::today('Europe/Zurich')->addDays($days)->toDateString();

    return $query->whereBetween('date', [$start, $end])
                 ->orderBy('date')
                 ->orderBy('start_time');
}

    public function getFormattedAttribute(): string|null     
    {
        return $this->formatted_date . ' ' . $this->formatted_time;
    }

    public function getFormattedDateAttribute(): string|null     
    {
        return $this->date->format('d.m.Y');
    }

    public function getFormattedTimeAttribute(): string|null     
    {
        $time = Carbon::parse($this->start_time)->format('H:i');
        $time2 = Carbon::parse($this->end_time)->format('H:i');
        return $time . ' - ' . $time2;
    }
}
