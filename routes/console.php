<?php

use App\Teavel\Sequences\MilanoAnnouncement;
use Azzarip\Teavel\Models\Sequence;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

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
    $contacts = Azzarip\Teavel\Models\Tag::name('Interested Milano Meraviglia')->contacts;
    foreach ($contacts as $contact) {
        Sequence::name(MilanoAnnouncement::class)->start($contact);
    }
})->purpose('Test milano sequence');
