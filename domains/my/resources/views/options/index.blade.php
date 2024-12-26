@extends('azzarip::layouts.1col')

@php
    $de = auth()->user()->speaks('de');
    $en = auth()->user()->speaks('en');
    $locale = app()->getLocale();
@endphp

@section('main')
<div class="max-w-3xl mx-auto mt-4 max-lg:px-2">
    <h1 class="mb-8 text-3xl font-semibold text-center font-head">@lang('Options')</h1>

    <div class="w-full mt-4 max-lg:px-8">
        {{-- <div class="flex items-center justify-between py-2 lg:py-4 border-y">
            <div class="w-1/2 pl-2 lg:w-3/4">
                <p>@lang('Languages'):                   
                    {{ $en && $de && ($locale == 'de') ? 'Deutsch (Hauptsprache), English' : '' }}
                    {{ $en && $de && ($locale == 'en') ? 'English (Main), Deutsch' : '' }}
                    {{ $en && !$de ? 'English' : '' }}
                    {{ !$en && $de ? 'Deutsch' : '' }}
                
                </p>
            </div>
            <div class="">
                <a href="/options/language" class="w-full text-right text-blue-800 cursor-pointer hover:underline">@lang('Modify')</a>
            </div>
        </div> --}}

        <div class="flex items-center justify-between py-2 border-b lg:py-4">
            <div class="w-1/2 pl-2 lg:w-3/4">
                <p>@lang('Modify Password')</p>
            </div>
            <div class="">
                <a href="/options/password" class="w-full text-right text-blue-800 cursor-pointer hover:underline">@lang('Modify')</a>
            </div>
        </div>

        <div class="flex items-center justify-between py-2 border-b lg:py-4">
            <div class="w-1/2 pl-2 lg:w-3/4">
                <p>@lang('Logout')</p>
            </div>
            <div class="">
                <p class="w-full text-right text-blue-800 cursor-pointer hover:underline" x-data @click="$dispatch('logout')">@lang('Logout')</p>
            </div>
        </div>
    </div>
</div>
@endsection
