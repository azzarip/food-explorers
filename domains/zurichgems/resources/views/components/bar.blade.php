@props(['name', 'url', 'address', 'description' => null])
<div>
<h3 class="font-serif font-semibold text-xl lg:text-2xl mb-2">{{ $name }}</h3>
<div class="flex items-center gap-2 text-slate-700">
<x-heroicon-s-map-pin class="w-5 h-5 text-amber-700" />
<a href="{{ $url }}" target="_blank" rel="noreferrer, noopener" class="hover:underline">{{ $address }}</a>
</div>
@if($description)
<p class="my-2">{{ $description }}</p>
@endif
</div>