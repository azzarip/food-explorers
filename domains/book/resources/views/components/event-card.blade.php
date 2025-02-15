@props(['event', 'offer'])

<div class="flex gap-2 sm:gap-5">
    <div class="w-1/3 p-2">
        <img src="@image($offer->slug . '.webp')" alt="{{ $offer->title }}" class="rounded-md shadow-md">
    </div>

    <div class="">
        <h1 class="mb-2 text-3xl font-bold">{{ $event->title }}</h1>
        <p class="text-xl font-bold text-amber-800 lg:mb-2">{{ $event->scheduled_at->format('D, j. F Y') }}</p>
        <p class="text-xl font-bold text-amber-950">{{ $event->scheduled_at->format('H:i') . ' - ' . $event->finished_at->format('H:i') }}</p>
    </div>
</div>
<div class="pl-4 mt-2 space-y-2 w-fit">
    <p><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 text-amber-800/50"/> {{ $event->location->name }}, {{ $event->location->address }} 
        (<a href="{{ $event->location->google_maps_url }}" class="inline-link" rel=“noreferrer”>Maps</a>)</p>
        </p>

    <p class="font-semibold"><x-heroicon-s-user-group class="inline w-6 h-6 mb-1 text-amber-800/50"/> {{ $event->going }} Going</p>
    @if ($event->available <= 12)
        <p class="font-semibold text-red-900">Less than 10 seats available!</p>
    @endif
    @if($event->isSoldOut)
        <p><x-heroicon-s-user-group class="inline w-6 h-6 mb-1 text-amber-800/50"/> {{ $event->capacity }} Going <span class="ml-3 text-xl font-semibold text-red-900 font-trajan">(SOLD-OUT)</span></p>
    @endif
    <p class="mt-4 font-serif text-2xl font-bold"><small class="font-sans">CHF</small> {{ $offer->price }} </p>
</div>