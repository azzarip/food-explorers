@extends('azzarip::menu')

@php
    $items = [
        'Homepage' => '/',

    ];
    $headerClass = 'bg-background text-white';
@endphp


@section('header')
<div class="flex flex-row justify-between px-2 mx-auto my-2">
    <a href="/" class="relative z-20 flex flex-col items-center mx-auto lg:mx-2">
        <p class="text-4xl">Food Explorers</p>
        <p>#1 Foodies Community in Zurich</p>
    </a>
</div>
@endsection

@section('big-menu')
    <ul class="flex items-center justify-start mt-3 mr-3 text-xl font-bold align-bottom space-x-9">
        @foreach ($items as $label => $path)
            <li>
                <a href="{{ $path }}"
                    class="p-2 font-medium rounded-md hover:bg-emerald-500/30">{{ $label }}</a>
            </li>
        @endforeach
        @guest
            <li>
                <a href="/register" class="px-4 py-2 big-button">Become a Food Explorer</a>
            </li>
            <li>
                <a href="/login" class="px-4 py-2 font-medium rounded-md hover:bg-emerald-500/30">Login</a>
            </li>
        @endguest

        @auth
        <li class="rounded-md" x-data="{'logout': false}">
            <a href="{{ durl('/', 'my', [], false) }}" class="px-4 py-2 big-button"><x-heroicon-o-user class="inline w-6 pr-1 mb-1 aspect-auto"/>{{ auth()->user()->first_name }}</a>
        </li>
        @endauth
    </ul>
@endsection

@section('small-menu')
<ul class="text-black">
   @foreach ($items as $label => $path)
        <li class="p-3 text-xl border-b group hover:bg-slate-200">
            <a href="{{ $path }}"
                class="block w-full h-full {{ request()->path() === $path ? 'font-semibold' : '' }}">{{ $label }}
            </a>
        </li>
    @endforeach
        <li class="p-3 text-xl border-y border-t-black group hover:bg-slate-200">
            <a href="/login"
                class="block w-full h-full {{ request()->path() === '/login' ? 'font-semibold' : '' }}">Login
            </a>
        </li>
        <li class="p-3 text-xl border-b group hover:bg-slate-200">
            <a href="/register"
                class="block w-full h-full {{ request()->path() === '/register' ? 'font-semibold' : '' }}">Become a Restaurant Explorer
            </a>
        </li>
</ul>
@endsection
