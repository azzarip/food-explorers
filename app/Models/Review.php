<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Review extends Model
{
    protected $casts = [
         'data' => 'array',
         'rating' => 'int'
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
