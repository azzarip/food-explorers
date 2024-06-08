<?php

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Restaurant;

it('has UUID', function () {
    $e = Event::factory()->create();
    expect($e->uuid)->not->toBeNull();
});

it('has location', function () {
    $r = Restaurant::factory()->create();

    $event = Event::factory()->create([
        'location_id' => $r->id,
    ]);

    expect($event->restaurant->id)->toBe($r->id);
});
