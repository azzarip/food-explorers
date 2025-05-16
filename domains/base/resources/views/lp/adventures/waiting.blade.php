@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Petit Paris - Food Explorers',
        description: 'Petit Paris. An Adventure through Parisian Bistrots.  From 3. October to 5. October 2025. Places are limited, book now.',
        image: image('petit-paris.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto">
        <div class="max-lg:px-2 mt-2">
            <h1><img src="@image('petit-paris-logo.webp')" alt="Petit Paris Title" class="w-full lg:max-w-lg mx-auto mb-2"></h1>
            <img src="@image('petit-paris.webp')" alt="Petit Paris" class="rounded-lg shadow-md w-3/4 lg:max-w-2xl mx-auto">
            <p class="font-serif text-2xl lg:text-3xl  font-semibold text-center rounded-lg m-2 lg:pt-4 ">An Adventure Through
                Parisian Bistrots
            </p>
            <p class="font-serif text-center mt-4 font-semibold text-amber-800 text-xl lg:text-2xl">Friday 3. - Sunday 5.
                October 2025</p>
        </div>

        <p class="text-center font-bold text-4xl lg:text-5xl py-4">BOOKINGS OPEN SOON</p>


    </article>
@endsection 