@extends('azzarip::layouts.1col')

@section('main')
<p class="font-semibold font-head text-center mt-4 lg:hidden text-amber-800/50">EVENT</p>
<h1 class="mt-2 text-3xl font-semibold text-center lg:text-4xl lg:mt-4">{{ $event->title }}</h1>

<div class="mx-auto max-w-xl space-y-4 mt-8 text-xl">
    <p class=""><x-heroicon-s-calendar-days class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50"/>{{ $event->scheduled_at->format('l, j. F Y')}}</p>
    <p class=""><x-heroicon-o-clock class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50"/>{{ $event->scheduled_at->format('H:i')}} - {{ $event->finished_at->format('H:i')}}</p>
    <p class=""><a href="{{ $event->location->google_maps_url }}" target="_blank" rel="noopener noreferrer"><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50" />{{ $event->location->name }}
            (<span
            class="font-semibold hover:underline">Maps <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1" /></span>)</a>
    
        <br> <span class="ml-7 text-lg text-slate-600">{{ $event->location->address }}</span>
    </p>

    <hr class="my-4">
    <p><x-heroicon-o-exclamation-triangle class="inline w-8 h-8 mb-1" /> This page is still under construction, if you want to change your participation please contact Marco or send him an email at 
    <a href="mailto:marco.azzari@foodexplorers.ch" class="font-semibold">marco.azzari@foodexplorers.ch</a>
    </p>
</div>


@endsection