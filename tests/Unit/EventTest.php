<?php

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Location;

it('has UUID', function () {
    $e = Event::factory()->create();
    expect($e->uuid)->not->toBeNull();
});

it('has location', function () {
    $r = Location::factory()->create();

    $event = Event::factory()->create([
        'location_id' => $r->id,
    ]);

    expect($event->location->id)->toBe($r->id);
});
