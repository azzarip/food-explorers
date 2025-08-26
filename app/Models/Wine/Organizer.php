<?php

namespace App\Models\Wine;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organizer extends Model
{
    protected $table = 'wine_organizers';

    public function tastings(): HasMany
    {
        return $this->hasMany( Tasting::class, 'organizer_id');
    }
}
