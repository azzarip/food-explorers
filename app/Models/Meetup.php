<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'location_id');
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class)->withTimestamps();
    }

    public function getFullTitleAttribute(): string
    {
        return "{$this->title} @ {$this->restaurant->name} ({$this->scheduled_at->format('d/m/Y')})";
    }
    public function getTitleDateAttribute(): string
    {
        return "{$this->title} - {$this->scheduled_at->format('d/m/Y')}";
    }

    protected function casts(): array
    {
        return [
            'scheduled_at' => 'datetime',
        ];
    }

    protected $table = 'events'; // Point to the same table

    // Override the default query to apply the scope
    protected static function booted()
    {
        static::addGlobalScope('meetups', function ($builder) {
            $builder->where('paid', false);
        });
    }
}
