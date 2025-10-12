<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
        public $timestamps = false;

        public float $conversion_factor = 0.9447;

    public function contact()
{
    return $this->belongsTo(Contact::class);
}

public function getConvertedAmountAttribute() 
{
    return $this->amount && $this->conversion_factor
        ? round($this->amount * $this->conversion_factor, 2)
        : null;
}
    protected $casts = [
        'details' => 'array',
    ];
}
