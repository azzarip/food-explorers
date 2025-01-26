@extends('azzarip::base')

@push('head')
    <script src="https://js.stripe.com/v3/"></script>
@endpush

@php
    // $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

    // $paymentIntent = $stripe->paymentIntents->create([
    //     'amount' => 7400,
    //     'currency' => 'chf',
    //     'automatic_payment_methods' => ['enabled' => true],
    // ]);
@endphp

@section('body')
    <main>
        <div class="lg:w-[64rem] mx-auto mb-8">
            <div class="grid grid-cols-1 gap-x-12 lg:grid-cols-2 lg:w-[64rem] mx-auto mb-8">

                <div class="mx-auto">

                    @yield('content')

                    <hr class="max-w-sm mx-auto mt-4 lg:my-4">
                    <div class="mt-2 text-y max-lg:px-2">
                        <h3 class="font-semibold">Terms and Conditions</h3>
                        <p>
                            You can cancel your participation and receive a 100% reimbursement until {{ $expireDate }} at 13:00. No
                            refunds will be accepted afterwards.
                        </p>
                        <p>Tickets are not nominal and can be transferred to someone else.</p>
                    </div>

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
                        <h2 class="text-2xl font-bold text-center font-trajan">Sign up to complete your reservation</h2>
                        <div class="max-w-sm mx-auto">
                            <x-book::auth.register />
                        </div>
                    @endguest
               
                    @auth
                        
                    @endauth
                </div>

            </div>

        </div>

        </div>
    </main>
@endsection
{{-- 
@push('scripts')
    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');
        elements = stripe.elements({
            clientSecret: "{{ $paymentIntent->client_secret }}",
            appearance: {
                theme: 'stripe',
                variables: {
                    colorPrimary: '#d97706',
                    //     colorBackground: '#f7f7f7', // Background color for fields
                    //     colorText: '#333333', // Text color
                    //     colorDanger: '#ff5252', // Error color
                    //     fontFamily: 'sans-serif', // Custom font family
                    //     borderRadius: '8px', // Adjust the border radius
                    // },
                    // rules: {
                    //     '.Input': {
                    //         border: '1px solid #cccccc', // Input field border style
                    //         padding: '10px', // Input field padding
                    //     },
                    //     '.Label': {
                    //         marginBottom: '4px', // Label spacing
                    //     },
                },
            },
        });
        const paymentElement = elements.create('payment', {
            paymentMethodOrder: ['twint', 'card', 'apple_pay', 'google_pay']
        });
        paymentElement.mount('#payment-element');

        // const form = document.querySelector('#payment-form');
        // form.addEventListener('submit', async (event) => {
        //     event.preventDefault();

        //     // Confirm the payment
        //     const { error, paymentIntent } = await stripe.confirmCardPayment(clientSecret, {
        //         payment_method: {
        //             card: cardElement,
        //             billing_details: {
        //                 name: document.querySelector('#name').value,
        //             },
        //         },
        //     });

        //     if (error) {
        //         // Handle payment errors
        //         console.error(error.message);
        //     } else if (paymentIntent && paymentIntent.status === 'succeeded') {
        //         // Payment succeeded
        //         console.log('Payment successful!');
        //     }
        // });
    </script>
@endpush --}}
