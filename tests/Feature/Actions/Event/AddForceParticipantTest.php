<?php

use App\Actions\Event\AddForceParticipant;
use App\Exceptions\EventExpiredException;
use App\Models\Contact;
use App\Models\Event;

beforeEach(function () {
    $this->event = Event::factory()->create([
        'scheduled_at' => now()->addYear(),
    ]);
    $this->contact = Contact::create([
        'first_name' => fake()->firstName(),
        'last_name' => fake()->lastName(),
    ]);
});

it('throws exception if event is expired', function () {
    $event = Event::factory()->create([
        'scheduled_at' => now()->subDay(),
    ]);

    AddForceParticipant::force($this->contact, $event);

})->throws(EventExpiredException::class);

it('signs up the participant', function () {
    $result = AddForceParticipant::force($this->contact, $this->event);

    expect($result)->toBe(true);

    expect($this->contact->events)->not->toBeNull();

});

it('does not give problems if person is already signed up', function () {
    $this->contact->events()->attach($this->event->id);

    $result = AddForceParticipant::force($this->contact, $this->event);

    expect($result)->toBe(true);
});
