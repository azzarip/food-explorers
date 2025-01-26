@extends('book::layout')

@section('content')
<div class="flex gap-2 sm:gap-5">
    <div class="w-1/3 p-2">
        <img src="@image('rum-tasting.webp')" alt="Rum Tasting" class="rounded-md shadow-md">
    </div>

    <div class="">
        <h1 class="mb-2 text-3xl font-bold">Explore Rum</h1>
        <p class="text-xl font-bold text-amber-800 lg:mb-2">22 February 2025</p>
        <p class="text-xl font-bold text-amber-950">18:00 - 20:00</p>

    </div>
</div>
<div class="pl-4 mt-2 space-y-2">
    <p><x-heroicon-s-map-pin class="inline w-6 h-6 mb-1 text-amber-800/50"/> Klein16, Kleinstrasse 16, 8008 Zürich (Maps)</p>
    <p class="font-semibold"><x-heroicon-s-users class="inline w-6 h-6 text-green-700" /> 4 Going</p>
    <p class="mt-4 font-serif text-2xl font-bold"><small class="font-sans">CHF</small> 49.- </p>
</div>
@endsection