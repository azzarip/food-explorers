@extends('azzarip::layouts.1col')

@php($points = 7)
@section('main')
<h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">ACHIEVEMENTS</h1>

<div class="max-w-2xl mx-auto mt-4 border rounded-lg shadow-lg">
<div class="flex flex-col py-4 lg:flex-row bg-gradient-to-b from-white via-white to-yellow-50">
    <div class="px-2 lg:w-2/3 lg:pl-8">
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
    <div class="px-2 lg:w-1/3">
        <p>You currently have:</p>
        <p class="my-2 ml-1 text-3xl font-semibold font-head">{{ $points }} points</p>
    </div>
</div>
</div>


<div class="grid gap-5 px-4 mt-8 lg:px-12 lg:mt-18 lg:grid-cols-2">
    <div class="h-20 py-2 border rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-center lg:text-2xl">Food & Restaurants</h2>
        <p class="text-center">Coming Soon!</p>
    </div>

    <div class="h-20 py-2 border rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold text-center lg:text-2xl">Bars & Drinks</h2>
        <p class="text-center">Coming Soon!</p>
    </div>

</div>
@endsection