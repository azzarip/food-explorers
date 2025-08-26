<?php

namespace App\Models\Wine;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organizer extends Model
{
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'organizer_id');
    }
}
