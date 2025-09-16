@props(['date'])
<a href="/tasting/{{ $date->tasting->id }}">
<div class="group w-full max-w-lg mx-auto rounded-2xl bg-white/95 shadow-lg border border-slate-200 p-5 transition transform hover:-translate-y-1 hover:shadow-xl">
    <h3 class="font-semibold text-xl lg:text-2xl text-slate-900 mb-3 group-hover:underline">
        {{ $date->tasting->title }}
    </h3>

    <div class="flex items-center text-slate-700 mb-2">
        <x-heroicon-o-clock class="w-5 h-5 mr-2 text-rose-500"/>
        <span>{{ $date->startAt()->format('H:i') }} – {{ $date->endAt()->format('H:i') }}</span>
    </div>

    <div class="flex items-center text-slate-700">
        <x-heroicon-o-map-pin class="inline w-5 h-5 mr-2 text-rose-500"/>
        <span>{{ $date->tasting->location->name }}</span>
        <a href="{{ $date->tasting->location->google_maps_url }}"
           rel="noopener noreferrer nofollow"
           target="_blank"
           class="ml-2 text-rose-600 font-medium hover:underline">
           Maps
        </a>
    </div>
    @if($date->tasting->is_dinner)
        <p class="mt-2 p-1 border border-yellow-600 rounded-xl text-sm text-center text-yellow-600 font-semibold w-fit">⭐ Dinner Experience</p>
    @endif
</div>
</a>