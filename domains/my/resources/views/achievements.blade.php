@extends('azzarip::layouts.1col')

@php($points = 7)
@section('main')
<h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">ACHIEVEMENTS</h1>

<div class="flex flex-col mx-4 mt-4 lg:flex-row">
    <div class="lg:w-1/2 lg:pl-8">
        <p>Your level is:</p>
        <p class="my-2 ml-1 text-3xl font-semibold text-yellow-700 font-head">
            @if ($points == 0)
                ROOKIE
            @elseif($points < 4)
                EXPLORER
            @elseif($points < 10)
                MASTER EXPLORER
            @else
                GRAND EXPLORER
            @endif
        </p>
    </div>
    <div class="lg:w-1/2">
        <p>You currently have:</p>
        <p class="my-2 ml-1 text-3xl font-semibold font-head">{{ $points }} points</p>
    </div>
</div>

<hr class="w-3/4 mx-auto mt-6 mb-6">
<p class="text-center">Coming Soon!</p>

<div class="grid gap-5 px-4 mt-8 lg:px-12 lg:mt-24 lg:grid-cols-2">
    <div class="h-20 py-2 border rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-center lg:text-2xl">Food & Restaurants</h2>
    </div>

    <div class="h-20 py-2 border rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-center lg:text-2xl">Bars & Drinks</h2>
    </div>

</div>
@endsection