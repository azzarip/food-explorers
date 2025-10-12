<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
        public $timestamps = false;

    public function contact()
{
    return $this->belongsTo(Contact::class);
}

    protected $casts = [
        'details' => 'array',
    ];
}
