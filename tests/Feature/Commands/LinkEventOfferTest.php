<?php

use App\Models\Event;
use App\Models\Offer;

it('asks and store value in db', function () {
    Event::factory()->create([
        'scheduled_at' => now()->addYear(),
    ]);

    Offer::create([
        'class' => 'test',
        'type_id' => 1,
        'slug' => 'test',
    ]);

    $this->artisan('link:event')
        ->expectsQuestion('Please provide the offer slug', 'test')
        ->expectsQuestion('Please provide the Event Id', '1')
        ->assertSuccessful();

    expect(Offer::first()->event_id)->toBe(1);
});

it('asks for correct slug', function () {
    Offer::create([
        'class' => 'test',
        'type_id' => 1,
        'slug' => 'test',
    ]);

    $this->artisan('link:event')
        ->expectsQuestion('Please provide the offer slug', 'test test')
        ->expectsQuestion('Please provide the Event Id', '1')
        ->assertFailed();
});

it('asks for numeric event id', function () {
    $this->artisan('link:event')
        ->expectsQuestion('Please provide the offer slug', 'test')
        ->expectsQuestion('Please provide the Event Id', 'test')
        ->assertFailed();
});

it('rejects not existing event id', function () {
    $this->artisan('link:event')
        ->expectsQuestion('Please provide the offer slug', 'test')
        ->expectsQuestion('Please provide the Event Id', '1')
        ->assertFailed();
});

it('rejects past event ids', function () {
    $event = Event::factory()->create([
        'scheduled_at' => now()->subDay(),
    ]);
    $this->artisan('link:event')
        ->expectsQuestion('Please provide the offer slug', 'test')
        ->expectsQuestion('Please provide the Event Id', '1')
        ->assertFailed();
});
