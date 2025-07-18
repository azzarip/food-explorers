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
            <span class="text-2xl lg:text-4xl space-y-3ellow-200/80 font-trajan">Food Explorers</span>
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
        <li>
            <a href="/"
                class="p-2 font-medium rounded-full hover:bg-amber-500/30">Foodie News</a>
        </li>  
        @guest
            <li>
                <a href="/register" class="px-4 py-2 std-button">Become a Food Explorer</a>
            </li>
            <li>
                <a href="/login" class="px-4 py-2 font-medium rounded-full hover:bg-amber-500/30">Login</a>
            </li>
        @endguest

        @auth
        <li class="rounded-md" x-data="{'logout': false}">
            <a href="{{ durl('/', 'my', [], false) }}" class="px-4 py-2 std-button"><x-heroicon-o-user class="inline w-6 pr-1 mb-1 aspect-auto"/>{{ auth()->user()->first_name }}</a>
        </li>
        @endauth
    </ul>
@endsection

@section('small-menu')
<ul class="text-black">
        <li class="p-3 text-xl border-y group hover:bg-slate-200">
            <a href="/"
                class="block w-full h-full {{ request()->path() === '/' ? 'font-semibold' : '' }}">Homepage
            </a>
        </li>
        <li class="p-3 text-xl border-y group hover:bg-slate-200">
            <a href="/food-news"
                class="block w-full h-full {{ request()->path() === '/food-news' ? 'font-semibold' : '' }}">Food News
            </a>
        </li>

    @guest
    <li class="p-3 text-xl border-b group hover:bg-slate-200">
        <a href="/login"
        class="block w-full h-full {{ request()->path() === '/login' ? 'font-semibold' : '' }}">Login
    </a>
</li>
<li class="p-3 text-xl border-b border-b-black group hover:bg-slate-200">
    <a href="/register"
    class="block w-full h-full {{ request()->path() === '/register' ? 'font-semibold' : '' }}">Become a Restaurant Explorer
</a>
</li>

@else
<li class="p-3 text-xl border-y border-t-black group hover:bg-slate-200">
    <a href="{{ route('my') }}"
    class="block w-full h-full">Private Area
</a>
</li>
@endguest
</ul>
@endsection
