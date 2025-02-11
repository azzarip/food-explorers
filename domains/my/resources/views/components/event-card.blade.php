@props(['event'])

@php
    $text = $event->scheduled_at->isFuture() ? 'in ' . $event->scheduled_at->diffForHumans(['syntax' => \Carbon\Carbon::DIFF_ABSOLUTE]) : 'NOW';
@endphp

<a href="/event/{{ $event->id }}">
<div class="px-4 pt-2 pb-3 mt-4 border rounded-lg shadow-lg cursor-pointer hover:bg-slate-100">
    <p class="float-right font-normal text-slate-600">{{ $text }}</p>
    <p class="text-xl font-bold text-amber-800 lg:mb-2">{{ $event->scheduled_at->format('D, j. M Y') }} </p>
    <h3 class="mt-2 mb-1 text-3xl font-bold hover:underline">{{ $event->title }}</h3>
    
    <p class="text-xl"><x-heroicon-m-clock class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50"/>{{ $event->scheduled_at->format('H:i')}}</p>


    <div class="mt-6 flex flex-col justify-between md:flex-row">
        <p class="text-xl"><a href="{{ $event->location->google_maps_url }}" target="_blank" rel="noopener noreferrer"><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 mr-1 text-amber-800/50" />{{ $event->location->name }}
                (<span
                class="font-semibold hover:underline">Maps <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1" /></span>)</a>
            
                <br> <span class="ml-7 text-lg text-slate-600">{{ $event->location->address }}</span>
        </p>
        <div class="w-1/2 max-w-[150px] ml-auto mt-2 md:mt-auto">
            <div class="w-full flex items-center font-semibold  bg-green-100 rounded-full cursor-pointer font-head hover:bg-green-300 group">
                <x-heroicon-o-check class="inline w-10 h-10 p-2 bg-green-300 rounded-full group-hover:bg-green-600" />
                <p class="px-4 text-xl font-head text-center">Going</p>
            </div>
        </div>
    </div>
</div>
</a>