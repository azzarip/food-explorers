<?php

namespace Domains\My\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
