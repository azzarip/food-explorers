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
    <article class="max-w-2xl mx-auto px-2">
        <div class="max-lg:px-2 mt-2 space-y-4">
        <h1 class="font-serif text-3xl font-semibold mt-4 text-center">Thank you!</h1>
        <p class="text-center text-xl lg:text-2xl">You have joined the waiting list</p>
        <p>A first email should be arriving in some minutes to start telling the story of our trip to Paris!</p>
        <p>But wait...</p>
        <div class="lg:border lg:shadow-lg shadow-amber-900 rounded-lg p-4">
        <h2 class="h2 mb-2">Another gift for you</h2>
        <p>I am preparing a booklet with all the information and photos and the program for our trip!</p>
        <p class="font-semibold text-center text-2xl my-2">Would you like to receive the full program in your letter box?</p>
        <p class=" text-center">(<span class="font-head">COMPLETELY FREE</span>)</p>
        <div class="max-w-md mx-auto">
            <x-button link="/address/paris">Yes, send me the program </x-button>
        </div>
        <p><strong>When it is ready</strong>, you will receive all the information in a printed format, and a special bonus :), nothing will be charged. </p>
        <p class="mt-2">If you are not interested, just ignore this, you will still receive the invitation but only via email.</p>
        </div>
    </div>
    </article>
@endsection
