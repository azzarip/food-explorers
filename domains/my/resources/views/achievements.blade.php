@extends('azzarip::layouts.1col')

@php($points = auth()->user()->getPoints())
@php($achievements = auth()->user()->getAchievements())

@section('main')
    <style>
        .bw {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        } 
    </style>

    <h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">Achievements</h1>

    <div class="max-w-2xl p-1 mx-auto mt-4">
        <x-my::points :$points />
    </div>

<div x-data="{'open': 'restaurants'}" class="mb-12">
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
        
        <x-my::achievements.restaurant
            title="Pizza Tasting"
            key='Napule'
            :active="in_array('Napule Pizza Tasting', $achievements)"
            line='Napulé, Meilen'
        /> 

        <x-my::achievements.restaurant
            title="Omakase"
            key='yu-an'
            :active="in_array('Yu-An Omakase', $achievements)"
            line='A culinary journey of Japan, through artfully crafted dishes that bring flavors and traditions to life.'
        /> 

        <x-my::achievements.restaurant
            title="1001 Nights"
            key='1001-nights'
            :active="in_array('1001 Nights', $achievements)"
            :unlocked="$points>=4"
            line='Dive into a magical ambiance that transports you straight to the heart of the Middle East.'
        /> 

    </section>

    <section x-show="open == 'bars'" x-cloak>
        <p class="mt-12 text-2xl italic text-center">Coming Soon</p>
    </section>
    <section x-show="open == 'adventures'" x-cloak class="max-w-xl py-6 mx-auto max-lg:px-2">
        
        <x-my::achievements.adventure
            title="Milano Meraviglia"
            key='milano'
            :active="in_array('Milano Meraviglia', $achievements)"
            :unlocked="$points>=1"
            line='Exploring Milan’s Cuisine, Hidden Treasures, and Luxury Life.'
        /> 

    </section>

</div>
@endsection
