@extends('components.layouts.layout')

@php
    $items = [
        'Homepage' => '/',
        'Get Started' => '/get-started',
    ];
@endphp


@section('header')
<div class="flex flex-row justify-between px-2 mx-auto mt-2 xl:w-1/4">
    <a href="/" class="flex flex-col items-center mx-auto lg:mx-2">
        <x-logo />
    </a>
</div>
@endsection

@section('big-menu')
    <ul class="flex items-center justify-start mr-3 text-2xl font-bold align-bottom space-x-9">
        @foreach ($items as $label => $path)
            <li>
                <a href="{{ $path }}"
                    class="p-2 font-medium rounded-md hover:bg-green-500/30">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('small-menu')
<ul class="text-black">
   @foreach ($items as $label => $path)
        <li class="p-3 text-xl border-b group hover:bg-slate-200">
            <a href="{{ $path }}"
                class="block w-full h-full {{ request()->path() === $path ? 'font-semibold' : '' }}">{{ $label }}</a>
        </li>
    @endforeach
</ul>
@endsection
