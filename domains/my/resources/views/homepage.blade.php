@extends('azzarip::layouts.1col')

@php($points = auth()->user()->getPoints())

@section('main')
<p class="mt-4 ml-12 text-2xl font-semibold font-head">@lang('Hi') {{ auth()->user()->first_name }}!</p>
<div class="grid gap-5 mx-4 lg:grid-cols-2">
    <div class="px-4 pt-4">
        <p class="mb-1 text-2xl font-semibold text-center"><x-heroicon-o-bell class="inline w-6 h-6 mb-1"/> @lang('Your next events'):</p>
        <hr>
        <p class="mt-4 italic text-center">@lang('No events available').<br>
        <p class="mt-2 italic text-center">@lang('Future events will be showcased here')</p>
        </p>
    </div>
    <div>
        <x-my::points> 
            <a class="block mt-1 text-right hover:underline" href="/achievements">See Achievements <x-heroicon-o-arrow-right class="inline w-4 h-4 mb-1"/></a>
        </x-my::points>
    </div>
    
</div>

@endsection
