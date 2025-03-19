@extends('book::layouts.simple-event')

@section('second_column')
    <h2 class="text-2xl font-bold text-center font-trajan">Reserve your seat</h2>

    @error('payment')
        <p class="p-1 my-2 bg-red-100 rounded-sm">
            <x-heroicon-o-exclamation-triangle class="inline w-4 h-4 text-red-900" />
            {{ $message }}
        </p>
    @enderror


    <div class="max-w-md mx-auto">
        <p class="my-2">Choose a payment method:</p>
        <form action="" id="payment-form" class="space-y-4">
        <div>
            <div id="payment-element"
                data-stripe-key="{{ config('services.stripe.key') }}"
                data-client-secret="{{ $clientSecret }}"
                data-return-url="{{ $return_url }}"
            >
        </div>
        <p class="mt-1 text-xs text-center text-slate-400"><x-heroicon-s-lock-closed class="inline w-3 h-3 mb-1"/>  SSL-encrypted connection       </p>
        </div>
            <x-forms.agb />
            <x-button type="submit">Reserve your seat</x-button>
        </form>
    </div>
@endsection

@push('scripts')
<script>
async function returnSoldOutState() {
    try {
        const response = await fetch('{{ durl("/offer/{$offer->slug}/soldout", "api") }}');
        if (response.ok) {
            const data = await response.json();
            return data.sold_out;
        } else {
            console.error('API request failed with status:', response.status);
            return true;
        }
    } catch (error) {
        console.error('Error during fetch:', error);
        return true;
    }
}
async function checkSoldOutState() {
    const soldOut = await returnSoldOutState();
    if (soldOut) {
        location.reload();
    }
}
setInterval(checkSoldOutState, 15000);
setInterval(function () {
    location.reload();
}, 600000);
</script>
@endpush
    
@push('head')
    @vite(['resources/js/stripe.js'])
@endpush