@extends('azzarip::layouts.1col')

@php
$contact = auth()->user();
$points = $contact->getPoints();
$nextEvent = $contact->getNextEvent();
if($nextEvent) {
    $sameDay = $nextEvent->scheduled_at->isSameDay(now());
    $text = $nextEvent->scheduled_at->isFuture() ? 'in ' . $nextEvent->scheduled_at->diffForHumans(['syntax' => \Carbon\Carbon::DIFF_ABSOLUTE]) : 'NOW';
}
@endphp

@section('main')
<p class="mt-4 ml-12 text-2xl font-semibold font-head">@lang('Hi') {{ auth()->user()->first_name }}!</p>
<div class="grid gap-5 mx-4 lg:grid-cols-2">
    <div class="pt-4 lg:px-4">
        <p class="mb-1 text-2xl font-semibold text-center"><x-heroicon-o-bell class="inline w-6 h-6 mb-1"/> @lang('Your next event'):</p>
        <hr>
        @if($nextEvent)

        
        <div class="relative px-4 pt-2 pb-3 mt-4 border rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold"><a href="{{ route('eventPage', ['eventPage' => $nextEvent->eventPage->id]) }}" class="hover:underline">{{ $nextEvent->title }}</a></h3>
            <p class="flex flex-col gap-2 my-2 lg:f2lex-row">
                <span><x-heroicon-o-calendar-days class="inline w-6 h-6 mb-1 mr-1" />{{ $nextEvent->scheduled_at->format('j. F Y') }}
                    @if(! $sameDay) <span class="ml-4 text-slate-700">({{ $text }})</span> @endif
                </span>
                <span><x-heroicon-o-clock class="inline w-6 h-6 mb-1 mr-1" />{{ $nextEvent->scheduled_at->format('h:i') }} - {{ $nextEvent->scheduled_at->addMinutes(150)->format('h:i')  }}
                    @if($sameDay) <span class="ml-4 text-slate-700">({{ $text }})</span> @endif
                </span>
                
            </p>
            <div class="absolute top-0 right-0 flex p-1 m-2" x-data="{'show': false}" @click.outside="show = false">
                <div x-cloak x-show=show class="bg-white border rounded cursor-pointer "  >
                    @if($nextEvent->eventPage)
                    <p @click="show = false;" class="p-1 hover:bg-slate-200"><a href="{{ route('eventPage', ['eventPage' => $nextEvent->eventPage->id]) }}"><x-heroicon-o-eye class="inline w-4 h-4 mb-1"  /> View Event</a></p>
                    @endif
                    <p @click="show = false; $dispatch('cancel');" class="p-1 hover:bg-slate-200"><x-heroicon-o-trash class="inline w-4 h-4 mb-1 text-red-800"  /> Cancel</p>
                    
                </div>
                <div  :class="{'bg-slate-200': show}" class="w-6 h-6 rounded cursor-pointer hover:bg-slate-300" @click="show = !show">
                    <x-heroicon-o-ellipsis-vertical />
                </div>
            </div>

            <div class="flex flex-col justify-between gap-4 lg:flex-row">
                <p class="mt-4"><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 mr-1" />{{ $nextEvent->location->name }}
                    (<a href="{{ $nextEvent->location->google_maps_url }}" target="_blank" rel="noreferrer"
                        class="font-semibold">Maps <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1" /></a>)
                </p>
                <div class="flex items-center w-1/2 max-w-[150px] ml-auto font-semibold text-center bg-green-100 rounded-full cursor-pointer font-head hover:bg-green-300 group" @click="$dispatch('cancel')">
                    <x-heroicon-o-check class="inline w-10 h-10 p-2 bg-green-300 rounded-full group-hover:bg-green-600" />
                    <p class="px-4">Going</p>
                </div>
            </div>
 
        </div>
        @else
        <p class="mt-4 italic text-center">@lang('No upcoming events').<br>
        @endif
        </p>
    </div>
    <div>
        <x-my::points :$points> 
            <a class="block mt-1 text-right hover:underline" href="/achievements">See Achievements <x-heroicon-o-arrow-right class="inline w-4 h-4 mb-1"/></a>
        </x-my::points>
    </div>
    
</div>


@endsection

@if($nextEvent)

<x-modals.cancelParticipation :event_id="$nextEvent->id" />

@endif