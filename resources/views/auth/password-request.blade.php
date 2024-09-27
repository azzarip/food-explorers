@extends('layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Password Request',
    );
@endphp


@section('content')
<div class="pt-4 pb-8 lg:pt-10">

    <x-forms::password.request />

    <div class="mt-8">
        <p class="mb-1 text-xl">Are you new and want to be part of the community?</p>
        <a href="{{ route('register') }}"
            class="block w-full max-w-lg py-3 mx-auto text-2xl text-center border-4 border-green-600 rounded-full hover:bg-green-600 hover:text-white">
            Become a Food Explorer <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
        </a>
    </div>
</div>
@endsection
