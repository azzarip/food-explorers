@extends('azzarip::layouts.1col')

@php 
$de = auth()->user()->speaks('de');
$en = auth()->user()->speaks('en');
@endphp 


@section('main')
<div class="max-w-3xl mx-auto mt-16 max-lg:px-2" x-data="{en: {{ $en ? 'true' : 'false' }}, de:  {{ $de ? 'true' : 'false' }}, selected: '{{ app()->getLocale() }}'}">
    <a href="/options" class="block cursor-pointer"><x-heroicon-o-arrow-left class="inline w-6 h-6" /> @lang('Options')</a>
    <h1 class="mt-4 mb-8 text-3xl font-semibold text-center font-head">@lang('Languages')</h1>

<x-forms::base action="{{ route('set-language') }}">

<div class="grid w-full grid-cols-2 mt-4 max-lg:px-8 gap-x-5">
    <label for="local" class="block py-3 text-2xl font-semibold text-right">Main Language:</label>
    <select id="local" name="local" class="w-32 py-2 text-xl border-2 border-black rounded-md shadow-sm"
        x-model="selected" @change="if (selected != '{{ app()->getLocale() }}') alert('paco')"
    >
        <option value="en">English</option>
        <option value="de">Deutsch</option>
    </select>

    <label for="deutsch" class="block py-3 mt-8 text-2xl font-semibold text-right">Deutsch:</label>
    <input type="checkbox" id="deutsch" name="deutsch" class="block w-6 mt-8 flush-left" 
        @checked($de) 
        @click="de = !de"
        x-bind:disabled="{{ app()->getLocale() == 'de' }}"
        >
    
    <label for="english" class="block py-3 text-2xl font-semibold text-right">English:</label>
    <input type="checkbox" id="english" name="english" class="block w-6 flush-left" 
        @checked($en) 
        @click="en = !en"
        x-bind:disabled="{{ app()->getLocale() == 'en' }}"
        >
</div>
        @error('invalid_language')
        <p class="p-2 text-center bg-white rounded-lg error-msg ">{{ $message }}</p>
        @enderror
    
    <input type="hidden" :value="en ? 1 : 0" name="en" />
    <input type="hidden" :value="de ? 1 : 0" name="de" />
    <button  class="big-button form-button" x-bind:disabled="!en && !de">
        @lang('Save') <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
    </button>
</x-forms::base>

</div>
@endsection
