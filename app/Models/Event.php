<?php

namespace App\Models;

use App\EventType;
use App\Models\Offer;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    public int $going;
    public int $available;

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class)->withTimestamps();
    }

    public function participants() {
        return $this->belongsToMany(Contact::class)
            ->wherePivotNull('deleted_at')
            ->wherePivotNull('queue');
    }

    public function getParticipantsCount(): int 
    {
        return $this->participants()->count();
    }

    public function getAvailableCount(): int 
    {
        $value = $this->capacity - $this->participants()->count();
        return $value >= 0 ? $value : 0;
    }

    public function getIsSoldOutAttribute(): bool 
    {
        return $this->available == 0;
    }

    public function loadData(){
        $this->going = $this->getParticipantsCount();
        $this->available = $this->getAvailableCount();
        return $this;
    }

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    protected function casts(): array
    {
        return [
            'scheduled_at' => 'datetime',
            'ended_at' => 'datetime',
            'event_type' => \App\EventType::class
        ];
    }


    public function eventPage(): HasOne
    {
        return $this->hasOne(EventPage::class);
    }

    public function scopeNext($query)
    {
        return $query->where('scheduled_at', '>', now()->startOfDay());
    }

    
    public function getFinishedAtAttribute()
    {
        if(empty($this->ended_at)) {
            $hours = $this->event_type->hoursToEnd();
            return $this->scheduled_at->addHours($hours);
        } 
        return $this->ended_at;
    }

    public function getTypeAttribute(): string
    {
        return $this->event_type->name ?? 'null';
    }

    public function getSlugAttribute(): ?string
    {
        return match($this->event_type) {
            EventType::Menu => $this->offer?->slug,
            default => null,
        };
    }
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
