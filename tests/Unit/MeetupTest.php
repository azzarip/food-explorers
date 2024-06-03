<?php

use Carbon\Carbon;
use App\Models\Meetup;
use App\Models\Restaurant;

it('has full_title', function () {
    Restaurant::create([
        'name' => '::name::',
        'google_maps_url' => fake()->url(),
        'address' => fake()->address(),
    ]);

    $m = Meetup::create([
        'title' => '::title::',
        'scheduled_at' => Carbon::parse('01/01/2015 19:30'),
        'max_participants' => 6,
        'restaurant_id' => 1,
    ]);

    expect($m->full_title)->toBe('::title:: @ ::name:: (01/01/2015)');
});
