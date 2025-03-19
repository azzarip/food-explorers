@props(['title', 'description', 'active' => false, 'key', 'unlocked' => true])

<div class="py-2 rounded-lg {{ $active ? 'bg-linear-to-br from-yellow-50 via-yellow-100 to-yellow-300 border border-yellow-800' : 'bg-stone-100' }}">

    <div class="flex flex-col items-center gap-4 sm:items-start md:flex-row">
        <div class="relative min-w-[80px] aspect-square py-2 ml-4 h-full my-auto">
            <img src='{{ image("achievements\\$key.webp") }}' alt="{{ $key }} logo" width="60px" height="60px" class="absolute inset-0 w-full h-full">
        </div>
        <div class="w-full h-full lg:pr-1">
    
            <div class="mx-auto text-sm font-semibold sm:float-right w-fit">
            @if($active)
            <p class="p-1 rounded-md text-amber-800"><x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /> EXPLORED <x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /></p>
            @elseif($unlocked)
            <p class="p-1 text-gray-700 rounded-md bg-stone-200"><x-heroicon-s-lock-open class="inline w-4 mb-1 ml-1 aspect-square" /> AVAILABLE</p>
            @else
            <p class="p-1 text-gray-700 rounded-md bg-stone-200"><x-heroicon-s-lock-closed class="inline w-4 mb-1 ml-1 aspect-square" /> LOCKED</p>
            @endif
        </div>
            
            <h3 class="mb-1 text-2xl font-semibold text-center sm:text-left font-head">{{ $title }}</h3>
            
            <p class="italic max-sm:px-2 @if(! $unlocked)  select-none blur-xs @endif">{{ $description }}</p>
        </div>
    </div>

</div>