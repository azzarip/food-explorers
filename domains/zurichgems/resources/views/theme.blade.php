@extends('azzarip::menu')

@php
    $items = [
        '/' => 'Home',
    ];
$headerClass = 'absolute top-0 left-0 w-full bg-transparent z-50';
@endphp


@section('header')
<div class="flex flex-row justify-between px-2 mx-auto my-1">
    <a href="/" class="flex items-center mx-auto lg:mx-2">
        <p class="text-2xl lg:text-3xl mt-2 font-extrabold">Zurich Gems <span aria-hidden="true">💎</span></p>
    </a>
</div>
@endsection

@section('big-menu')
    <ul class="flex items-center justify-start mt-3 mb-1 mr-3 text-xl font-bold align-bottom space-x-9">
        @foreach ($items as $url => $label)
            <li>
                <a href="{{ $url }}"
                    class="p-2 font-medium rounded-full hover:bg-amber-500/30 {{ request()->path() === ltrim($url, '/') ? 'bg-amber-500/30' : '' }}">{{ $label }}</a>
            </li>
    
        @endforeach
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
