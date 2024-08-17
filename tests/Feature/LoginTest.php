<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\post;

beforeEach(function() {
    $this->data = [
        'email' => 'email@example.com',
        'password' => '::password::',
    ];
});

it('logins contact', function () {
    $contact = Contact::factory()->create($this->data);

    post('/login', $this->data);

    expect(Auth::user())->toEqual($contact);
});
