<?php

use App\Models\Contact;
use Azzarip\Teavel\Models\Sequence;
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
    $contacts = Contact::limit(1)->get();
    //$contacts = Tag::name('Omakase Completed')->contacts;
    $s = Sequence::name('App\Teavel\Sequences\OmakaseFollowup');
    foreach ($contacts as $contact) {
        $s->start($contact);
    }
    
})->purpose('Test milano sequence');
