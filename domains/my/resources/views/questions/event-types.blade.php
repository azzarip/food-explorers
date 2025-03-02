@extends('my::layouts.question')

@section('question')
<div class="lg:h-12"></div>

<h1 class="mt-4 text-2xl text-center text-white font-head">What events would you be interested in?</h1>
<div class="flex flex-col max-w-sm gap-5 px-5 mx-auto mt-4" 
    x-data="{food: {{var_export($Food) }}, drinks: {{var_export($Drinks) }}, adventures: {{var_export($Adventures) }}}">


    <div class="border-2 rounded-lg shadow-md cursor-pointer shadow-white" @click="food = !food"
        x-bind:class="food ? 'bg-yellow-300 border-yellow-600' : 'bg-white'" >
        <img src="https://icons.iconarchive.com/icons/microsoft/fluentui-emoji-flat/256/Fork-And-Knife-With-Plate-Flat-icon.png" alt="Food Events" class="w-20 mx-auto mt-5 mb-2 lg:w-32">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">Food & Restaurants</h2>
    </div>


    <div class="border-2 rounded-lg shadow-md cursor-pointer shadow-white" @click="drinks = !drinks"
        x-bind:class="drinks ? 'bg-yellow-300 border-yellow-600' : 'bg-white'" >
        <img src="https://cdn-icons-png.flaticon.com/512/675/675968.png" alt="Food Events" class="w-16 mx-auto mt-5 mb-2 lg:w-32">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">Bar & Drinks</h2>
    </div>

    <div class="border-2 rounded-lg shadow-md cursor-pointer shadow-white" @click="adventures = !adventures"
        x-bind:class="adventures ? 'bg-yellow-300 border-yellow-600' : 'bg-white'" >
        <img src="https://cdn-icons-png.flaticon.com/512/1180/1180356.png" alt="Food Events" class="w-16 mx-auto mt-5 mb-2 lg:w-32">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">Adventures <br> <span class="font-normal">around the world</span> </h2>
    </div>



    <x-forms::base action="/question/event-type" >
    @csrf

    <input type="hidden" :value="food ? 1 : 0" name="Food" />
    <input type="hidden" :value="drinks ? 1 : 0" name="Drinks" />
    <input type="hidden" :value="adventures ? 1 : 0" name="Adventures" />
    <button  class="std-button">
        @lang('Continue') <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
    </button>
    </x-forms::base>

</div>
@endsection
