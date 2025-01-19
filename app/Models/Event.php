<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Event extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class)->withTimestamps();
    }

    public function participants() {
        return $this->belongsToMany(Contact::class);
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


}
