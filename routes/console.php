<?php

use App\Models\Contact;
use Azzarip\Teavel\Models\Sequence;
use Illuminate\Foundation\Inspiring;
use App\Teavel\Sequences\PizzaTasting;
use Illuminate\Support\Facades\Artisan;
use App\Teavel\Sequences\MilanoAnnouncement;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('test:sequence', function () {
    Sequence::name(PizzaTasting::class)->start(Contact::first());

})->purpose('Test milano sequence');
