<?php

use App\Actions\Stripe\OfferPayment;
use App\Models\Offer;
use Illuminate\Auth\AuthenticationException;

beforeEach(function () {
    $this->offer = Offer::create([
        'class' => '::test::',
        'slug' => '::test::',
        'type_id' => 1,
    ]);
});

it('throws exception is user is not authenticated', function () {
    OfferPayment::get($this->offer);
})->throws(AuthenticationException::class);
