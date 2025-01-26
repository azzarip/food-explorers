@extends('layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Login',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Login and registration page.',
    );

@endphp


@section('content')
<div class="pt-4 pb-8 lg:pt-10">
    <p class="text-4xl leading-normal text-center text-black font-trajan">Food Explorers</p>

    <x-forms::login />

    <div class="mt-8">
        <p class="mb-1 text-xl">Are you new and want to be part of the community?</p>
        <a href="/register"
            class="block w-full max-w-lg py-3 mx-auto text-2xl text-center border-4 border-yellow-500 rounded-full hover:bg-yellow-500 hover:text-white">
            Become a Food Explorer <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
        </a>
    </div>
</div>
@endsection
