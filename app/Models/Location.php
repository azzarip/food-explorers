<?php

namespace App\Models;

use App\Enums\LocationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function lastEvent()
    {
        return $this->hasOne(Event::class)->latestOfMany('scheduled_at');
    }

    public function getNameAddressAttribute(): string
    {
        return $this->name.', '.$this->address;
    }

    public function getTypeAttribute(): ?LocationType
    {
        return $this->type_id
            ? LocationType::from($this->type_id)
            : null;
    }

    // mutator: $location->type = LocationType::WineBar
    public function setTypeAttribute(LocationType|string|int|null $value): void
    {
        $this->attributes['type_id'] = $value instanceof LocationType
            ? $value->value
            : $value;
    }
}
