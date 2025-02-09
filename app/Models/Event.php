<?php

namespace App\Models;

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
            'event_type' => \App\EventType::class
        ];
    }

    protected function getEndedAtAttribute($value) {
        if(empty($value)) {
            $hours = $this->event_type->hoursToEnd();
            return $this->scheduled_at->addHours($hours);
        }
        return Carbon::parse($value);
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
        return $this->scheduled_at->addMinutes(150);
    }

    public function getTypeAttribute(): string
    {
        if(empty($this->event_type)) {
            return "Unlisted Event";
        }

        return $this->event_type->name;
    }

}
