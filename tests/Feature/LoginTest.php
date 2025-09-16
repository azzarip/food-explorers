<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

beforeEach(function () {
    $this->data = [
        'email' => 'email@example.com',
        'password' => '::password::',
    ];
});

it('logins contact', function () {
    $contact = Contact::factory()->create([
        'email' => $this->data['email'],
        'password' => bcrypt($this->data['password']),
    ]);

    $this->dpost('/login', 'base', $this->data);

    expect(Auth::user()->id)->toEqual($contact->id);
});

it('reject on wrong password', function () {
    $contact = Contact::factory()->create([
        'email' => $this->data['email'],
        'password' => bcrypt('::wrong_password::'),
    ]);

    $this->dpost('/login', 'base', $this->data)->assertSessionHasErrors('email');

    expect(Auth::check())->toBeFalse();
});

it('rejects without password', function () {
    $contact = Contact::factory()->create([
        'email' => $this->data['email'],
        'password' => '',
    ]);

    $this->dpost('/login', 'base', $this->data)->assertSessionHasErrors('user');

    expect(Auth::check())->toBeFalse();
});
