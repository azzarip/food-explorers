@extends('book::layout')

@php
    $expireDate = '14.02.2025';
@endphp

@section('content')
<div class="flex gap-5">
    <div class="w-1/3 p-2">
        <img src="@image('rum-tasting.webp')" alt="Rum Tasting" class="rounded-md shadow-md">
    </div>

    <div class="text-y">
        <h1 class="text-3xl font-bold">Explore Rum</h1>
        <p class="text-xl font-bold text-amber-800">22 February 2025 - 18:00</p>
        <p class="font-semibold"><x-heroicon-s-users class="inline w-6 h-6 text-green-700" /> 4/12 Going</p>
        <p class="font-serif text-2xl font-bold"><small class="font-sans">CHF</small> 49.- <small class="font-sans">per Person</small> </p>
    </div>
</div>
<p><x-heroicon-o-map-pin class="inline w-6 h-6 mb-1"/> Klein16, Kleinstrasse 16</p>
@endsection