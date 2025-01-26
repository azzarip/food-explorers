@props(['clientSecret'])
<div class="max-w-md mx-auto">
    <p class="my-2">Choose a payment method:</p>
    <form action="" id="payment-form" class="space-y-4">
        <div id="payment-element"></div>
        <x-forms.agb />
        <x-button type="submit">Reserve your seat</x-button>
    </form>
</div>

@push('scripts')
    <script>
        const stripe = Stripe('{{ config('services.stripe.key') }}');
        elements = stripe.elements({
            clientSecret: "{{ $clientSecret }}",
            appearance: {
                theme: 'stripe',
                variables: {
                    colorPrimary: '#d97706',
                },
            },
        });

        const paymentElement = elements.create('payment', {
            paymentMethodOrder: ['twint', 'card', 'apple_pay', 'google_pay']
        });
        paymentElement.mount('#payment-element');

        const form = document.querySelector('#payment-form');

        paymentElement.on('change', (event) => {
            form.scrollIntoView({
                behavior: 'smooth'
            });
        });

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            console.log(typeof elements);

            const result = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    return_url: '{{ request()->url() }}/paco',
                },
            }).then(function(result) {
                if (result.error) {
                    console.log(result.error);
                }
            });
        });
    </script>
@endpush

@push('head')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
