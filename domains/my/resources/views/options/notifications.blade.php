@extends('azzarip::layouts.1col')


@php
    $types = auth()
        ->user()
        ->hasTags(['Food', 'Drinks', 'Adventures']);
@endphp

@section('main')
    <div class="max-w-lg mx-auto mt-16 max-lg:px-2">
        <a href="/options" class="block mb-2 cursor-pointer"><x-heroicon-o-arrow-left class="inline w-6 h-6" />
            Back</a>

        @if(session('saved'))
            <div class="pt-3 pb-2 text-center bg-green-100 border-2 border-green-900 rounded-sm">
                <x-heroicon-s-check-circle class="inline w-6 h-6 mb-1 text-green-800" /> Your changes have been saved!
            </div>
        @endif
        <h1 class="mt-4 mb-4 text-3xl font-semibold text-center font-head">Notification Preferences</h1>
        <p>For which new event would you like to be informed?</p>

      

        <x-forms::base action="/question/event-type">
            @csrf
            <div class="flex items-center">
                <label class="switch">
                    <input type="checkbox" name="Food" value="true" @checked($types['Food'])>
                    <span class="slider"></span>
                </label>
                <span class="ml-2 text-xl font-semibold">Food & Restaurants</span>
            </div>
            <div class="flex items-center">
                <label class="switch">
                    <input type="checkbox" name="Drinks" value="true" @checked($types['Drinks'])>
                    <span class="slider"></span>
                </label>
                <span class="ml-2 text-xl font-semibold">Bars & Drinks</span>
            </div>
            <div class="flex items-center">
                <label class="switch">
                    <input type="checkbox" name="Adventures" value="true" @checked($types['Adventures'])>
                    <span class="slider"></span>
                </label>
                <span class="ml-2 text-xl font-semibold">Adventures around the world</span>
            </div>
            <button class="std-button">
                @lang('Save') <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
            </button>
        </x-forms::base>
    </div>

    <style>
        .switch {
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 2em;
            margin-left: 36px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            border: 1px solid #adb5bd;
            transition: .4s;
            border-radius: 30px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1.4em;
            width: 1.4em;
            border-radius: 20px;
            left: 0.27em;
            bottom: 0.25em;
            background-color: #adb5bd;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #007bff;
            border: 1px solid #007bff;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #007bff;
        }

        input:checked+.slider:before {
            transform: translateX(1.4em);
            background-color: #fff;
        }
    </style>
@endsection
