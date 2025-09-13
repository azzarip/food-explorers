@extends('azzarip::menu')

@php
    $items = [
        'Homepage' => '/',

    ];
    $headerClass = request()->path() == '/' ? 'bg-none absolute top-0' : 'bg-black';
    $headerClass .= " w-full text-white";
@endphp


@section('header')
<div class="flex flex-row justify-between px-2 mx-auto my-1">
    <a href="/" class="relative z-20 flex items-center mx-auto lg:mx-2">
        <img src="{{ image('logo_sm.webp') }}" alt="Food Explorers Logo" width="65" height="60">
        @if (request()->path() != '/')
            <span class="text-2xl lg:text-4xl space-y-3ellow-200/80 font-trajan">Zurich Gems</span>
        @endif
    </a>
</div>
@endsection

@section('big-menu')
    <ul class="flex items-center justify-start mt-3 mb-1 mr-3 text-xl font-bold align-bottom space-x-9">
        <li>
            <a href="/"
                class="p-2 font-medium rounded-full hover:bg-amber-500/30">Home</a>
        </li> 
    </ul>
@endsection

@section('small-menu')
<ul class="text-black">
        <li class="p-3 text-xl border-y group hover:bg-slate-200">
            <a href="/"
                class="block w-full h-full {{ request()->path() === '/' ? 'font-semibold' : '' }}">Homepage
            </a>
        </li>
</ul>
@endsection
