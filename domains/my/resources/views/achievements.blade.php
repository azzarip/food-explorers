@extends('azzarip::layouts.1col')


@section('main')
    <style>
        .bw {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        } 
    </style>

    <h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">Achievements</h1>

    <div class="max-w-2xl p-1 mx-auto mt-4">
        <x-my::points />
    </div>

<div x-data="{'open': 'restaurants'}">
    <div class="grid grid-cols-3 mt-8 min-w-md lg:px-12 lg:mt-18">
        <div class="h-20 py-2 border rounded-lg rounded-b-none cursor-pointer lg:h-20"
        x-bind:class="open === 'restaurants' ? 'border-b-white border-yellow-600' : 'border-b-yellow-600'"
        @click = "open = 'restaurants'"
        >
            <h2 class="text-xl font-semibold text-center lg:mt-4 lg:text-2xl">Food & Restaurants</h2>
        </div>

        <div class="h-20 py-2 border rounded-lg rounded-b-none cursor-pointer lg:h-20"
        x-bind:class="open === 'bars' ? 'border-b-white border-yellow-600' : 'border-b-yellow-600'"
        @click = "open = 'bars'"
        >
            <h2 class="text-xl font-semibold text-center lg:mt-4 lg:text-2xl">Bars & Drinks</h2>
        </div>

        <div class="h-20 py-2 border rounded-lg rounded-b-none cursor-pointer lg:h-20"
        x-bind:class="open === 'adventures' ? 'border-b-white border-yellow-600' : 'border-b-yellow-600'"
        @click = "open = 'adventures'"
        >
            <h2 class="text-xl font-semibold text-center lg:mt-2 lg:text-2xl">Adventures</h2>
            <p class="text-sm text-center lg:text-md">around the World</p>
        </div>
    </div>


    <section x-show="open == 'restaurants'" class="max-w-lg py-6 mx-auto mt-6 space-y-8 max-lg:px-2">
        
        <x-my::restaurant-achievement 
            title="Pizza Tasting"
            key='napule'
            :active=false
            line='Napulé, Meilen'
        /> 

        <x-my::restaurant-achievement 
            title="Omakase"
            key='yu-an'
            :active=false
            line='A culinary journey of Japan, through artfully crafted dishes that bring flavors and traditions to life.'
        /> 

        <x-my::restaurant-achievement 
        title="1001 Nights"
        key='1001-nights'
        :active=false
        line='Dive into a magical ambiance that transports you straight to the heart of the Middle East.'
        /> 

    </section>

    <section x-show="open == 'bars'" x-cloak>
        <p class="mt-12 text-2xl italic text-center">Coming Soon</p>
    </section>

    <section x-show="open == 'adventures'" x-cloak class="max-w-lg py-6 mx-auto max-lg:px-2">
    @php($a = false)
        <div class="flex items-center gap-4 py-4 pl-4 border-2 rounded-lg {{ $a ? ' border-yellow-700  shadow-lg bg-gradient-to-br from-yellow-300 via-yellow-400 to-yellow-500' : ''}}">
            <div class="relative w-[140px] aspect-square">
                <img src="@image('achievements\adventure.webp')" alt="Adventure Achievement" width="120px" height="120px" class="absolute object-contain inset-0 {{ $a ? '' : 'bw' }} w-full h-full">
                <img src="@image('achievements\milano.webp')" alt="Milano" width="60px" height="60px" class="absolute inset-0 object-cover w-10/12 p-2 m-auto aspect-square ">
            </div>
            <div>
                @if($a)
                <p class="font-semibold max-lg:text-sm text-serif text-amber-800"><x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /> EXPLORED <x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /></p>
                @else
                <p class="p-1 ml-auto mr-2 font-semibold rounded-lg w-fit max-lg:text-sm text-serif bg-stone-200 text-slate-800"><x-heroicon-s-lock-closed class="inline w-4 mb-1 aspect-square" /> UNCHARTED</p>
                @endif
                <p class="text-2xl font-semibold lg:text-3xl font-head">Milano Meraviglia</p>
                <p class="italic max-lg:text-sm text-md">Exploring Milan’s Cuisine, Hidden Treasures, and Luxury Life.</p>
            </div>
        </div>
    </section>
</div>
@endsection
