@extends('azzarip::layouts.1col')


@section('main')
    <h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">Achievements</h1>

    <div class="max-w-2xl p-1 mx-auto mt-4">
        <x-my::points />
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
