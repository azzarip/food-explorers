@props(['event'])

@php
    $text = $event->scheduled_at->isFuture() ? 'in ' . $event->scheduled_at->diffForHumans(['syntax' => \Carbon\Carbon::DIFF_ABSOLUTE]) : 'NOW';
@endphp

<a href="/event/{{ $event->id }}">
<div class="px-4 pt-2 pb-3 mt-4 border rounded-lg shadow-lg cursor-pointer hover:bg-slate-100">
    <p class="float-right font-normal text-slate-600">{{ $text }}</p>
    <p class="text-lg font-bold md:text-xl text-amber-800 lg:mb-2">{{ $event->scheduled_at->format('D, j. M Y') }} </p>
    <h3 class="mt-2 mb-1 text-xl font-bold md:text-2xl lg:text-3xl hover:underline">{{ $event->title }}</h3>
    
    <p class="mt-2 text-md md:text-xl"><x-heroicon-m-clock class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50"/>{{ $event->scheduled_at->format('H:i')}}</p>


    <div class="flex flex-col justify-between mt-4 md:flex-row">
        <p class="text-md md:text-xl"><a href="{{ $event->location->google_maps_url }}" target="_blank" rel="noopener noreferrer"><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50" />{{ $event->location->name }}
                (<span
                class="font-semibold hover:underline">Maps <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1" /></span>)</a>
            
                <br> <span class="text-sm lg:text-lg ml-7 text-slate-600">{{ $event->location->address }}</span>
        </p>
        <div class="w-1/2 max-w-[150px] ml-auto mt-2 md:mt-auto">
        @if($event->status == 'going')
            <div class="flex items-center w-full font-semibold bg-green-100 rounded-full cursor-pointer font-head hover:bg-green-300 group">
                <x-heroicon-o-check class="inline w-8 h-8 p-2 bg-green-300 rounded-full lg:w-10 lg:h-10 group-hover:bg-green-600" />
                <p class="px-4 text-center text-md md:text-xl font-head">Going</p>
            </div>
        @else        
            
            @if($event->type == 'Menu') <a href="{{ durl( $event->slug, 'base') }}">@endif
            <div class="flex items-center w-full font-semibold rounded-full cursor-pointer bg-slate-100 font-head hover:bg-amber-300 group">
                <p class="px-4 mx-auto text-center text-md md:text-xl font-head">Explore</p>
                <x-heroicon-o-arrow-right class="inline w-8 h-8 p-2 rounded-full bg-slate-300 lg:w-10 lg:h-10 group-hover:bg-amber-400" />
            </div>@if($event->type == 'Menu') </a>@endif
        @endif
        </div>
    </div>
</div>
</a>