@extends('azzarip::layouts.1col')

@php
$contact = auth()->user();
$points = $contact->getPoints();
$nextEvent = $contact->getNextEvent();
@endphp

@section('main')
<p class="mt-4 ml-12 text-2xl font-semibold font-trajan">@lang('Hi') {{ auth()->user()->first_name }}!</p>
<div class="grid gap-5 mx-4 lg:grid-cols-2">
    <div class="pt-4 lg:px-4">
        <p class="mb-1 text-2xl font-semibold text-center"><x-heroicon-o-bell class="inline w-6 h-6 mb-1"/> @lang('Your next event'):</p>
        <hr>
        @if($nextEvent)
            <x-my::event-card :event='$nextEvent' :going=true />
            <p class="mt-2 text-right"><a href="/events" class="underline">See other events </a> &rightarrow;</p>
        @else
        <p class="mt-4 italic text-center">You're not signed up for any events yet. <br>
        <p class="mt-2 text-center"><a href="/events" class="underline">Check the upcoming events </a> &rightarrow;</p>
        @endif
        </p>
    </div>
    <div class="mb-4">
        <x-my::points :$points> 
            <a class="block mt-1 text-right hover:underline" href="/achievements">See Achievements <x-heroicon-o-arrow-right class="inline w-4 h-4 mb-1"/></a>
        </x-my::points>
    </div>
    
</div>
@endsection
