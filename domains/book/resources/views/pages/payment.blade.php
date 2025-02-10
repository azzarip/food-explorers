@extends('book::layouts.simple-event')

@section('second_column')
    <h2 class="text-2xl font-bold text-center font-trajan">Reserve your seat</h2>

    @error('payment')
        <p class="p-1 my-2 bg-red-100 rounded">
            <x-heroicon-o-exclamation-triangle class="inline w-4 h-4 text-red-900" />
            {{ $message }}
        </p>
    @enderror


    <div class="max-w-md mx-auto">
        <p class="my-2">Choose a payment method:</p>
        <form action="" id="payment-form" class="space-y-4">
            <div id="payment-element"
                data-stripe-key="{{ config('services.stripe.key') }}"
                data-client-secret="{{ $clientSecret }}"
                data-return-url="{{ $return_url }}"
            ></div>
            <x-forms.agb />
            <x-button type="submit">Reserve your seat</x-button>
        </form>
    </div>
@endsection
    
    @push('head')
        @vite(['resources/js/stripe.js'])
    @endpush