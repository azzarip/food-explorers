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
        <p>A first email should be arriving in some minutes to start telling the <strong>story of our trip to Paris</strong>!</p>
    </div>
    </article>
@endsection
