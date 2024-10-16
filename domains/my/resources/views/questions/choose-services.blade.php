@extends('my::layouts.question')

@section('question')
<h1 class="mt-4 text-2xl text-center text-white font-head">@lang('Which types of events would you like to attend?')</h1>
<div class="flex max-w-sm gap-5 px-5 mx-auto mt-4 md:flex-col" x-data="
    {restaurant: false, bar: false}">

    @error('invalid_selection')
        <p class="p-2 text-center bg-white rounded-lg error-msg ">{{ $message }}</p>
    @enderror

    <div class="border rounded-lg shadow-md cursor-pointer shadow-white" @click="restaurant = !restaurant"
        x-bind:class="restaurant ? 'bg-green-500' : 'bg-white'" >
        <img src="{{ image('flag_de.webp') }}" alt="German Flag" class="mx-auto mt-5 mb-2">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">Food Explorers</h2>
        <p class="mx-8 my-2 font-semibold text-slate-800">From Restaurant Dinners to Exclusive Tastings, the best Food Experiences in Zürich.</p>
    </div>


    <div class="border rounded-lg shadow-md cursor-pointer shadow-white" @click="bar = !bar"
        x-bind:class="bar ? 'bg-green-500' : 'bg-white'" >
        <img src="{{ image('flag_en.webp') }}" alt="English Flag" class="mx-auto mt-4 mb-2">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">Spirit Sailors</h2>
        <p class="mx-8 my-2 font-semibold text-slate-800">We will visit exclusive bars, cocktail bars and experience premium spirit tastings.</p>
    </div>


    <x-forms::base action="/question/services" >
    @csrf

    <input type="hidden" :value="bar ? 1 : 0" name="bar" />
    <input type="hidden" :value="restaurant ? 1 : 0" name="restaurant" />
    <button  class="big-button form-button" x-bind:disabled="!bar && !restaurant">
        @lang('Continue') <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
    </button>
    </x-forms::base>

</div>
@endsection
