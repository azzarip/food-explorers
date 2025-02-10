<?php

use Mockery;
use App\Models\Offer;
use App\Models\Contact;
use App\Actions\Stripe\OfferPayment;
use Illuminate\Auth\AuthenticationException;
use Azzarip\Teavel\Actions\Stripe\CreateStripeContact;

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

