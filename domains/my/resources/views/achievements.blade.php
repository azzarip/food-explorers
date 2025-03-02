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
    <p class="px-2 py-1 mx-auto mt-4 text-xl text-center rounded-lg bg-slate-100 font-head w-fit hover:bg-slate-200"> <a href="/achievements/instructions" class="hover:underline">What are achievements?<x-heroicon-o-arrow-right class="inline w-6 h-6 mb-1 ml-2" /></a></p>
<div x-data="{'open': 'restaurants'}" class="mb-12">
    <div class="grid grid-cols-3 mt-8 min-w-md lg:px-12 lg:mt-18">
        <div class="h-20 py-2 border rounded-lg rounded-b-none cursor-pointer lg:h-20"
        x-bind:class="open === 'restaurants' ? 'border-b-white border-yellow-600' : 'border-b-yellow-600'"
        @click = "open = 'restaurants'"
        >
            <h2 class="text-sm font-semibold text-center md:text-xl lg:mt-4 lg:text-2xl">Food & Restaurants</h2>
        </div>

        <div class="h-20 py-2 border rounded-lg rounded-b-none cursor-pointer lg:h-20"
        x-bind:class="open === 'bars' ? 'border-b-white border-yellow-600' : 'border-b-yellow-600'"
        @click = "open = 'bars'"
        >
            <h2 class="text-sm font-semibold text-center md:text-xl lg:mt-4 lg:text-2xl">Bars & Drinks</h2>
        </div>

        <div class="h-20 py-2 border rounded-lg rounded-b-none cursor-pointer lg:h-20"
        x-bind:class="open === 'adventures' ? 'border-b-white border-yellow-600' : 'border-b-yellow-600'"
        @click = "open = 'adventures'"
        >
            <h2 class="text-sm font-semibold text-center md:text-xl lg:mt-4 lg:text-2xl">Adventures</h2>
            <p class="text-xs text-center lg:text-md">around the World</p>
        </div>
    </div>


    <section x-show="open == 'restaurants'" class="max-w-xl py-6 mx-auto mt-6 space-y-8 max-lg:px-2">

        <x-my::achievements.restaurant
            title="Explore Malaysia"
            key='afatt'
            :active="in_array('Explore Malaysia', $achievements)"
            description="A gastronomic journey that brings the vibrant flavors of Malaysia to Zurich. This feast will immerse you in the rich culinary traditions of Southeast Asia."
        /> 
        
        <x-my::achievements.restaurant
            title="Pizza Tasting"
            key='napule'
            :active="in_array('Napule Pizza Tasting', $achievements)"
            description='Napulé, Meilen'
        /> 

        <x-my::achievements.restaurant
            title="Omakase"
            key='yu-an'
            :active="in_array('Yu-An Omakase', $achievements)"
            description='A culinary journey of Japan, through artfully crafted dishes that bring flavors and traditions to life.'
        /> 

        <x-my::achievements.restaurant
            title="1001 Nights"
            key='1001-nights'
            :active="in_array('1001 Nights', $achievements)"
            :unlocked="$points>=4"
            description='Dive into a magical ambiance that transports you straight to the heart of the Middle East.'
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
            description='Exploring Milan’s Cuisine, Hidden Treasures, and Luxury Life.'
        /> 

    </section>

</div>
@endsection
