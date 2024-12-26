@props(['title', 'line', 'active' => false, 'key', 'unlocked' => true])

<div class="flex items-start gap-4 py-4 pl-4 border-2 rounded-lg {{ $active ? ' border-yellow-700  shadow-lg bg-gradient-to-br from-yellow-200 via-yellow-300 to-yellow-400' : ''}}">
    <div class="relative w-[140px] aspect-square">
        <img src="@image('achievements\adventure.webp')" alt="Adventure Achievement" width="120px" height="120px" class="absolute object-contain inset-0 {{ $active ? '' : 'bw' }} w-full h-full">
        <img src='{{ image("achievements\\$key.webp") }}' alt="{{ $key }}" width="60px" height="60px" class="absolute inset-0 object-cover w-10/12 p-2 m-auto aspect-square ">
    </div>
    <div>
        @if($active)
        <p class="float-right p-1 mr-4 text-sm font-semibold rounded-md w-fit text-serif text-amber-900 "><x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /> EXPLORED <x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /></p>
        @elseif($unlocked)
        <p class="float-right p-1 ml-auto mr-2 text-sm font-semibold text-gray-700 rounded-md lg:mr-4 w-fit bg-stone-200 text-serif"><x-heroicon-s-lock-open class="inline w-4 mb-1 ml-1 aspect-square" /> AVAILABLE</p>
        @else
        <p class="float-right p-1 ml-auto mr-2 text-sm font-semibold text-gray-700 rounded-md lg:mr-4 w-fit bg-stone-200 text-serif"><x-heroicon-s-lock-closed class="inline w-4 mb-1 ml-1 aspect-square" /> LOCKED</p>
        @endif
        <p class="mb-1 text-2xl font-semibold lg:text-3xl font-head">{{ $title }}</p>
        <p class="italic max-lg:text-sm text-md @if(!$unlocked) select-none blur-sm @endif">{{ $line }}</p>
    </div>
</div>