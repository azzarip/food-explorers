@extends('azzarip::layouts.1col')

@php($points = 10)

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
        <div class="p-2 rounded-lg bg-gradient-to-tr from-yellow-500 via-yellow-400 to-yellow-700">
        <div class="px-4 pt-4 pb-2 bg-white rounded-md">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-2/3">
                    <p>Your level is:</p>
                    <p class="my-2 text-3xl font-semibold text-yellow-700 font-head">
                        @if ($points == 0)
                            ROOKIE
                        @elseif($points < 4)
                            EXPLORER
                        @elseif($points < 10)
                            MASTER EXPLORER
                        @else
                            GRAND EXPLORER
                        @endif
                    </p>
                </div>
                <div class="lg:w-1/3">
                    <p>You currently have:</p>
                    <p class="my-2 text-3xl font-semibold font-head">{{ $points }} points</p>
                </div>
            </div>
            <a class="block mt-1 text-right hover:underline" href="/achievements">See Achievements <x-heroicon-o-arrow-right class="inline w-4 h-4 mb-1"/></a>        </div>
        </div>
    </div>
    
</div>

@endsection
