<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $casts = [
        'data' => 'array',
        'rating' => 'int',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
