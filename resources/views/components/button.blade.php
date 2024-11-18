@props(['link' => null])

@if($link)
<a href="{{ $link }}"  {{ $attributes->merge(['class' => 'big-button form-button px-2 mb-2 text-center']) }}>
@else
<button  {{ $attributes->merge(['class' => 'big-button form-button px-2 mb-2']) }}>
@endif 
{{ $slot }} <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />

{!! $link ? "</a>" : "</button>" !!}