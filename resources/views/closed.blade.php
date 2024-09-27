@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@section('main')
<div class="flex flex-row items-center justify-between lg:items-start">
<div class="flex flex-row items-center justify-start w-fit">
    <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-32">
        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="mx-auto">
    </div>
    <p class="font-serif text-2xl font-semibold lg:text-4xl">Food Explorers</p>
</div>
<div class="float-right w-32 m-6">
    <img src="https://static.wixstatic.com/media/82d2d6_4800dfcab3c74a20a267d944aeff8122~mv2.jpg/v1/fill/w_517,h_515,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/82d2d6_4800dfcab3c74a20a267d944aeff8122~mv2.jpg" alt="Yu An Logo" class="">
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="font-serif text-4xl font-semibold text-center">Omakase at Yu-An</h1>
    <p class="mt-2 text-xl text-center">Tuesday 15. October 2024, 19:00</p>

    <p class="mt-8 text-6xl text-center">Bookings are closed!</p>
</article>
@endsection