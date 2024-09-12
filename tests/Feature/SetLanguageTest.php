<?php

use App\Models\Contact;
use function Pest\Laravel\post;

beforeEach(function() {
    Contact::factory()->create();
    $this->actingAs(Contact::first());
});

it('returns error if no languages', function () {
    post(route('set-language'),  [])->assertSessionHasErrors();
});

it('sets de', function () {
    post(route('set-language'),  ['de' => true]);
    expect(value: Contact::first()->speaks('de'))->toBeTrue();

    post(route('set-language'),  ['en' => true]);
    expect(value: Contact::first()->speaks('en'))->toBeTrue();
});

it('sets two languages', function () {
    post(route('set-language'),  ['de' => true, 'en' => true]);
    expect(value: Contact::first()->speaks('de'))->toBeTrue();
    expect(value: Contact::first()->speaks('en'))->toBeTrue();
});
