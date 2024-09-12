<?php

use App\Models\Contact;

beforeEach(function() {
    Contact::factory()->create();
    $this->contact = Contact::first();
});

test('has_set_locale confirms locale', function () {
    expect($this->contact->has_set_locale)->toBeFalse();

    $this->contact->update(['communication' => 1]);

    expect($this->contact->has_set_locale)->toBeTrue();
});


test( 'sets locale and return en|de|null', function () {
    expect($this->contact->locale)->toBeNull();

    $this->contact->setPreferredLocale('en');

    expect($this->contact->locale)->toBe('en');

    $this->contact->setPreferredLocale('de');

    expect($this->contact->locale)->toBe('de');
});

test('set locale throws exception', function () {
    $this->contact->setPreferredLocale('not_a_language');

})->throws(\InvalidArgumentException::class);

it('setsLocale and speaks locale', function () {
    expect($this->contact->speaks('de'))->toBeNull();
    expect($this->contact->speaks('en'))->toBeNull();

    $this->contact->addLocale('en');

    expect($this->contact->speaks('de'))->toBeFalse();
    expect($this->contact->speaks('en'))->toBeTrue();
    expect($this->contact->has_set_locale)->toBeTrue();

    $this->contact->addLocale('de');

    expect($this->contact->speaks('de'))->toBeTrue();
    expect($this->contact->speaks('en'))->toBeTrue();
});
