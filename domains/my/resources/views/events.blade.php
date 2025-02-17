@extends('azzarip::layouts.1col')

@php($flagEmpty = true)

@section('main')
<a class="block p-2 mt-3 ml-auto mr-4 text-right rounded-lg w-fit hover:bg-slate-300 bg-slate-200" href="/events/past"> Past Events <x-heroicon-o-arrow-right class="inline w-4 h-4 mb-1"/></a>
<h1 class="mt-2 text-2xl font-semibold text-center lg:text-4xl lg:mt-4">Upcoming Events</h1>

@if ($events)
<div class="max-w-xl mx-auto gap-y-4">
    @foreach($events as $event)
        <x-my::event-card :$event />
    @endforeach 
</div>
@else
<p class="mt-4 italic text-center">@lang('No events available').<br>
<p class="mt-2 italic text-center">@lang('Future events will be showcased here')</p>
@endif


@endsection