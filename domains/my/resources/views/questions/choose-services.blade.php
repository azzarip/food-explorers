@extends('my::layouts.question')

@section('question')
<div class="lg:h-20"></div>
<h1 class="max-w-2xl mx-auto mt-4 text-2xl text-center text-white font-head">@lang('Would you ALSO like to be invited at exclusive bars and experience premium drinks and spirit tastings?')</h1>
<div class="flex max-w-sm gap-5 px-5 mx-auto mt-8 md:flex-col" x-data="
    {bar: null}">

    @error('invalid_selection')
        <p class="p-2 text-center bg-white rounded-lg error-msg ">{{ $message }}</p>
    @enderror

    <div class="border rounded-lg shadow-md cursor-pointer shadow-white" @click="bar = true"
    x-bind:class="bar ? 'bg-green-500' : 'bg-white'" >
        <h2 class="mt-2 mb-2 text-2xl font-semibold text-center">YES</h2>
        <p class="mx-8 my-2 font-semibold text-slate-800">I want to explore restaurant AND bars, and enjoy food and drinks tastings.</p>
    </div>


    <div class="border rounded-lg shadow-md cursor-pointer shadow-white" @click="bar = false"
        x-bind:class="bar == false ? 'bg-green-500' : 'bg-white'" >
        <h2 class="mt-2 mb-2 text-2xl font-semibold text-center">NO</h2>
        <p class="mx-8 my-2 font-semibold text-slate-800">I want to explore ONLY restaurants and participate in food tastings.</p>
    </div>





    <x-forms::base action="/question/services" >
    @csrf

    <input type="hidden" :value="bar ? 1 : 0" name="bar" />
    <input type="hidden" :value="1" name="restaurant" />
    <button  class="std-button form-button" x-bind:disabled="bar == null">
        @lang('Continue') <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
    </button>
    </x-forms::base>

</div>
@endsection
