@extends('azzarip::layouts.1col')

@php($events = auth()->user()->participatedEvents()->simplePaginate(10))
@section('main')
<a class="block p-2 mt-3 ml-12 mr-4 text-right rounded-lg lg:ml-8 w-fit hover:bg-slate-300 bg-slate-200" href="/events">
    <x-heroicon-o-arrow-left class="inline w-4 h-4 mb-1" />back to Upcoming Events</a>
<h1 class="mt-2 text-2xl font-semibold text-center lg:text-4xl lg:mt-4">Past Events</h1>

@if($events->isEmpty())
    <p class="my-4 italic text-center">@lang('No events available').</p>
@endif

<div class="max-w-sm px-2 pb-12 mx-auto mt-4 space-y-4">
    @foreach ($events as $event)
        <div class="px-4 pt-2 pb-3 border rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold">{{ $event->title }}</h3>
            <p>{{ $event->scheduled_at->format('j. F Y') }}</p>

            <p class="mt-4"><a href="{{ $event->location->google_maps_url }}" target="_blank" rel="noreferrer noopener"> <x-heroicon-o-map-pin class="inline w-5 h-5 mb-1 mr-1" />{{ $event->location->name }}
                (<span class="font-semibold">Maps <x-heroicon-o-arrow-top-right-on-square
                        class="inline w-4 h-4 mb-1" /></span>)</a>
            </p>
        </div>
    @endforeach

    @if ($events->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="grid grid-cols-2 gap-5">
            @if (!$events->onFirstPage())
                <a href="{{ $events->previousPageUrl() }}" rel="prev"
                    class="relative inline-flex items-center py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-500 ring-gray-300 active:bg-gray-100 active:text-gray-700 ">
                    <x-heroicon-o-arrow-left class="inline w-4 h-4 mr-1" />
                    {!! __('latest Events') !!}
                </a>
            @else
                <div></div>
            @endif
            @if ($events->hasMorePages())
                <a href="{{ $events->nextPageUrl() }}" rel="next"
                    class="relative inline-flex items-center py-2 ml-auto text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white rounded-md hover:text-gray-500 ring-gray-300 active:bg-gray-100 active:text-gray-700 ">
                    {!! __('earlier Events') !!}
                    <x-heroicon-o-arrow-right class="inline w-4 h-4 ml-1" />
                </a>
            @endif
        </nav>
    @endif
</div>
@endsection
