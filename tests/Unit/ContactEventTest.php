<?php

use App\Models\Event;
use App\Models\Contact;

test('events has contacts', function () {
    $e = Event::factory()->create();
    $c = Contact::factory()->create();
    $e->contacts()->sync([$c->id]);
    $this->assertDatabaseHas('contact_event', [
        'contact_id' => $c->id,
        'event_id' => $e->id,
    ]);
});

test('contact has events', function () {
    $e = Event::factory()->create();
    Contact::factory()->create();
    $c = Contact::first();
    $c->events()->sync([$e->id]);
    $this->assertDatabaseHas('contact_event', [
        'contact_id' => $c->id,
        'event_id' => $e->id,
    ]);
});
it('can retrieve past events', function () {
    Event::factory(3)->create(['scheduled_at' => fake()->dateTimeBetween('-1 year', '-1 day'),]);
    Event::factory(3)->create(['scheduled_at' => fake()->dateTimeBetween('1 day', '1 year')]);

    Contact::factory()->create();
    $c = Contact::first();
    $e_ids= Event::all()->pluck('id')->toArray();
    $c->events()->sync($e_ids);

    expect($c->pastEvents()->count())->toBe(3);
});
