<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meetup extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class)->withTimestamps();
    }

    public function getFullTitleAttribute(): string
    {
        return "{$this->title} @ {$this->location->name} ({$this->scheduled_at->format('d/m/Y')})";
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
}
