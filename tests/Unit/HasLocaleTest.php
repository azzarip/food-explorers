<?php

use App\Models\Contact;

beforeEach(function () {
    Contact::factory()->create();
    $this->contact = Contact::first();
});

test('has_locale confirms locale', function () {
    expect($this->contact->has_locale)->toBeFalse();

    $this->contact->update(['locale' => 1]);

    expect($this->contact->has_locale)->toBeTrue();
});

test('locale returns en,de,null', function () {
    expect($this->contact->locale)->toBeNull();

    $this->contact->update(['locale' => 0]);

    expect($this->contact->locale)->toBe('en');

    $this->contact->update(['locale' => 1]);

    expect($this->contact->locale)->toBe('de');
});

it('can set preferred locale', function () {
    $this->contact->setPreferredLocale('en');
    expect($this->contact->locale)->toBe('en');

    $this->contact->setPreferredLocale('de');
    expect($this->contact->locale)->toBe('de');
});

test('set preferred locale throws exception', function () {
    $this->contact->setPreferredLocale('wrong');
})->throws(InvalidArgumentException::class);

it('can add languages', function () {
    $this->contact->addLanguage('en');
    expect($this->contact->speaks('en'))->toBeTrue();

    $this->contact->addLanguage('de');
    expect($this->contact->speaks('de'))->toBeTrue();
});

it('can remove language', function () {
    $this->contact->addLanguage('en');
    expect($this->contact->speaks('en'))->toBeTrue();

    $this->contact->removeLanguage('en');
    expect($this->contact->speaks('en'))->toBeFalse();
});
