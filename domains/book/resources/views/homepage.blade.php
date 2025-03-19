@extends('book::layout')

@section('content')
<div class="flex gap-5">
    <div class="w-1/3 p-2">
        <img src="@image('achievements/yu-an.webp')" alt="Yu An" class="rounded-md drop-shadow-md">
    </div>

    <div class="space-y-3">
        <h1 class="text-3xl font-bold">Yu An Omakase</h1>
        <p class="text-xl font-bold text-amber-800">05 May 2025 - 19:00</p>
        <p class="font-semibold"><x-heroicon-s-users class="inline w-6 h-6 text-slate-400" /> 12/36 Going</p>
        <p class="font-serif text-2xl font-bold"><small class="font-sans">CHF</small> 74.- <small class="font-sans">per Person</small> </p>
    </div>
</div>
@endsection