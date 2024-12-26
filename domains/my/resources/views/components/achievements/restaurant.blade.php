@props(['title', 'line', 'active' => false, 'key', 'unlocked' => true])

<div class="flex items-start gap-4 py-2 rounded-lg {{ $active ? 'bg-gradient-to-br from-yellow-50 via-yellow-100 to-yellow-300 border border-yellow-800' : 'bg-stone-100' }}">
    <div class="relative min-w-[80px] aspect-square py-2 ml-4 h-full my-auto">
        <img src='{{ image("achievements\\$key.webp") }}' alt="{{ $key }} logo" width="60px" height="60px" class="absolute inset-0 w-full h-full">
    </div>
    <div x-data="{'expanded': 'false'}" class="w-full h-full pr-1">
        @if($active)
        <p class="float-right p-1 mr-1 text-sm font-semibold rounded-md w-fit text-serif text-amber-800 "><x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /> EXPLORED <x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /></p>
        @elseif($unlocked)
        <p class="float-right p-1 ml-auto mr-2 text-sm font-semibold text-gray-700 rounded-md w-fit bg-stone-200 text-serif"><x-heroicon-s-lock-open class="inline w-4 mb-1 ml-1 aspect-square" /> AVAILABLE</p>
        @else
        <p class="float-right p-1 ml-auto mr-2 text-sm font-semibold text-gray-700 rounded-md w-fit bg-stone-200 text-serif"><x-heroicon-s-lock-closed class="inline w-4 mb-1 ml-1 aspect-square" /> LOCKED</p>
        @endif
        <h3 class="mb-1 text-2xl font-semibold font-head">{{ $title }}</h3>
        <p class="italic @if(! $unlocked)  select-none blur-sm @endif">{{ $line }}</p>
    </div>
</div>