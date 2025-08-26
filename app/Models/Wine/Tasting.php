<?php

namespace App\Models\Wine;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tasting extends Model
{
    protected $table = "wine_tastings";

    protected $with = ['dates', 'organizer'];

    public function getEarliestDate(): ?Date
    {
        return $this->dates()
            ->orderBy('date')
            ->orderBy('start_time')
            ->first();
    }

    protected $appends = ['start_at'];

    public function getStartAtAttribute(): ?Date
    {
        return $this->getEarliestDate();
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function organizer(): BelongsTo
    {
        return $this->belongsTo(Organizer::class, 'organizer_id');
    }

    public function dates(): HasMany
    {
        return $this->hasMany(Date::class, 'event_id')->orderBy('date')->orderBy('start_time');
    }
}
