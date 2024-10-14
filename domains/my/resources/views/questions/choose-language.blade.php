@extends('azzarip::base', ['bg' => 'bg-gray-900', 'nav' => false ])

@section('body')
<div class="absolute top-0 right-0 p-2 text-right text-white">
    <p> <small>&#x25BC;</small> {{ strtoupper(app()->getLocale()) }}</p>
</div>
<h1 class="mt-4 text-2xl text-center text-white font-head">@lang('Which languages can you comfortably speak?')</h1>
<div class="flex max-w-sm gap-5 px-5 mx-auto mt-4 md:flex-col" x-data="
    {en: {{ app()->getLocale() == 'en' ? 'true' : 'false' }}, de:  {{ app()->getLocale() == 'de' ? 'true' : 'false' }}}">

    @error('invalid_language')
        <p class="p-2 text-center bg-white rounded-lg error-msg ">{{ $message }}</p>
    @enderror

    <div class="border rounded-lg shadow-md cursor-pointer shadow-white" @click="de = !de"
        x-bind:class="de ? 'bg-green-500' : 'bg-white'" >
        <img src="{{ image('flag_de.webp') }}" alt="German Flag" class="mx-auto mt-5 mb-2">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">Deutsch</h2>
    </div>


    <div class="border rounded-lg shadow-md cursor-pointer shadow-white" @click="en = !en"
        x-bind:class="en ? 'bg-green-500' : 'bg-white'" >
        <img src="{{ image('flag_en.webp') }}" alt="English Flag" class="mx-auto mt-4 mb-2">
        <h2 class="mt-2 mb-2 text-xl font-semibold text-center">English</h2>
    </div>


    <x-forms::base action="{{ route('set-language') }}" >
    @csrf

    <input type="hidden" :value="en ? 1 : 0" name="en" />
    <input type="hidden" :value="de ? 1 : 0" name="de" />
    <button  class="big-button form-button" x-bind:disabled="!en && !de">
        @lang('Continue') <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
    </button>
    </x-forms::base>

</div>
@endsection
