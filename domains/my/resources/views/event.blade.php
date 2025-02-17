@extends('azzarip::layouts.1col')

@section('main')
<p class="mt-4 font-semibold text-center font-head lg:hidden text-amber-800/50">EVENT</p>
<h1 class="mt-2 text-3xl font-semibold text-center lg:text-4xl lg:mt-4">{{ $event->title }}</h1>

<div class="max-w-xl mx-auto mt-8 space-y-4 text-xl">
    <p class=""><x-heroicon-s-calendar-days class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50"/>{{ $event->scheduled_at->format('l, j. F Y')}}</p>
    <p class=""><x-heroicon-o-clock class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50"/>{{ $event->scheduled_at->format('H:i')}} - {{ $event->finished_at->format('H:i')}}</p>
    <p class=""><a href="{{ $event->location->google_maps_url }}" target="_blank" rel="noopener noreferrer"><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50" />{{ $event->location->name }}
            (<span
            class="font-semibold hover:underline">Maps <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1" /></span>)</a>
    
        <br> <span class="text-lg ml-7 text-slate-600">{{ $event->location->address }}</span>
    </p>

    <hr class="pb-4 my-4">
    <div class="space-y-4">
    @if($event->slug)
    <a href="{{ durl($event->slug, 'base') }}" class="block">
        <p class="w-full py-2 mx-auto text-center border-2 border-black rounded lg:w-4/5 hover:bg-amber-400/40">
            <x-heroicon-o-magnifying-glass class="inline w-6 h-6 mb-1" />
            View Event Page
        </p>
    </a>
    @endif
    @if($event->event_type == \App\EventType::Menu && ! $contact->isGoingTo($event))
    <a href="{{ durl($event->slug, 'book') }}" class="block">
        <p class="w-full py-2 mx-auto text-center border-2 border-black rounded lg:w-4/5 hover:bg-amber-400/40">
            <x-heroicon-o-pencil class="inline w-6 h-6 mb-1" />
            Reserve your Place
        </p>
    </a>
    @else
    <p class="max-w-xl mx-auto"><x-heroicon-o-exclamation-triangle class="inline w-8 h-8 mb-1" /> This page is still under construction, if you want to change your participation please contact Marco or send him an email at 
        <a href="mailto:marco.azzari@foodexplorers.ch" class="font-semibold">marco.azzari@foodexplorers.ch</a>
        </p>
    @endif
    </div>
</div>



@endsection