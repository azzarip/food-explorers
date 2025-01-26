@extends('azzarip::base')

@php
    $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

    $paymentIntent = $stripe->paymentIntents->create([
        'amount' => 7400,
        'currency' => 'chf',
        'automatic_payment_methods' => ['enabled' => true],
    ]);
@endphp

@section('body')
    <main>
        <div class="lg:w-[64rem] mx-auto mb-8">
            <div class="grid grid-cols-1 gap-x-12 lg:grid-cols-2 lg:w-[64rem] mx-auto mb-8">

                <div class="mx-auto" x-data="{ 'open': {{ var_export(!auth()->check() && !request()->query('v')) }} || (window.innerWidth >= 1024) }">

                    @yield('content')

                    <hr class="max-w-sm mx-auto mt-4 max-lg:hidden lg:my-4">

                    <div class="mt-2 text-y max-lg:px-2" x-show="open" x-cloak>
                        <h3 class="font-semibold">Terms and Conditions</h3>
                        <p>
                            You can cancel your participation and receive a 100% reimbursement until {{ $expireDate }} at
                            13:00. No
                            refunds will be accepted afterwards.
                        </p>
                        <p>Tickets are not nominal and can be transferred to someone else.</p>
                    </div>
                    <hr class="max-w-sm mx-auto mt-4 lg:hidden lg:my-4">
                    <div @click="open = !open"
                        class="px-2 py-1 mx-auto border border-t-0 rounded-b-lg cursor-pointer lg:hidden w-fit">
                        <p x-show="open" x-cloak class="text-sm text-gray-600"><x-heroicon-o-chevron-up
                                class="inline w-4 h-4" /> Show Less</p>
                        <p x-show="!open" x-cloak class="text-sm text-gray-600"><x-heroicon-o-chevron-down
                                class="inline w-4 h-4" /> Show More</p>
                    </div>


                </div>


                <div class="bg-white max-lg:px-2 max-lg:mt-2">
                    @guest
                        <div class="max-w-sm mx-auto">
                            @if (request()->query('v') == 'login')
                                <x-book::auth.login />
                            @else
                                <x-book::auth.register />
                            @endif
                        </div>
                    @endguest

                    @auth
                    <h2 class="text-2xl font-bold text-center font-trajan">Reserve your seat</h2>

                        <x-book::payment :clientSecret="$paymentIntent->client_secret" />
                    @endauth
                </div>

            </div>

        </div>

        </div>
    </main>
@endsection

