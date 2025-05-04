@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Petit Paris - Food Explorers',
        description: 'Petit Paris. An Adventure through Parisian Bistrots. October 2025, Dates to be decided. Places are limited, book now.',
        image: image('petit-paris.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
    <article class="max-w-xl mx-auto px-2 mb-8">
        <div class="max-lg:px-2 mt-2 space-y-2">
            <div class="lg:bg-yellow-200 p-1 pb-2 rounded w-full">
            <h1 class="font-serif text-3xl font-semibold mt-4 text-center">Thank you!</h1>
            <p class="text-center text-xl lg:text-2xl">You have joined the waiting list</p>
            </div>
            <p>But wait...</p>
            <h1 class="font-serif text-2xl lg:text-3xl font-semibold mt-4 text-center">Receive the Paris program directly at home!</h1>
            <p class=" text-center"> <strong>Completely free</strong> and <strong>Not Binding</strong></p>
            <img src="@image('booklet_paris.png')" alt="Paris Booklet">
            <p><strong>I’m preparing a beautiful booklet</strong> for you: filled with all the information, inspiring photos, and the full program of our trip. </p>

            <x-button link="/address/paris">Yes, I want it for FREE!</x-button>
            <p class="text-center">or</p>
            <x-button link="/ty/paris/final">No, I am fine with the online version.</x-button>
        </div>
    </article>
@endsection
