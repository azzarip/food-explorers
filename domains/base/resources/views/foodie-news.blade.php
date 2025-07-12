@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50'])

@php
    $seo = new SEO(
        title: 'Zurich Foodie News - Food Explorers',
        description: 'The Ultimate Guide to Zürich’s Food Scene - From Hidden Gems to Culinary Events. Everything a Foodie must know about the city\'s culinary delights.',
    );
@endphp

@section('main')
    <article class="mx-auto max-w-3xl px-2">
        <h1 class="font-trajan text-center text-3xl lg:text-4xl mt-8">Zurich Foodie News</h1>
        <h2 class="font-head text-2xl lg:text-3xl mt-2 mb-4 text-slate-700 text-center leading-relaxed lg:leading-relaxed">
            Tasting Zürich One Bite at a Time – Restaurants, Events & All Things Delicious</h2>
        <div class="flex flex-col gap-4">
            <a href="/top-3-gelaterias-zurich" class="group">
                <div
                    class="w-full border-amber-700 group-hover:border-amber-500 border rounded shadow-lg bg-white px-4 py-2">
                    <h3 class="font-head font-bold text-xl lg:text-2xl group-hover:underline">My Top 3 Gelaterias in Zurich
                    </h3>
                    <p class="mb-2">I went on a mission to try every gelato spot in Zurich: I discovered some hidden gems, others were
                        really nice,
                        others completely disappointing. Here’s the "full scoop" for all the Zurich ice cream lovers.</p>
                    <p class="text-right text-sm"> Marco Azzari, <time datetime="2025-07-12">12 July 2025</time></p>
                </div>
            </a>
            <a href="/gelaterias-zurich-review" class="group">
                <div
                    class="w-full border-amber-700 group-hover:border-amber-500 border rounded shadow-lg bg-white px-4 py-2">
                    <h3 class="font-head font-bold text-xl lg:text-2xl group-hover:underline">All Gelaterias of Zurich
                        Ranked</h3>
                    <p class="mb-2">After trying more than 50 Gelaterias in Zurich, here is the list with all the shops ranked. All the
                        gelaterias are divided into: must try, nice to try, forgettable.
                        Read the article for the full list.</p>
                    <p class="text-right text-sm"> Marco Azzari, <time datetime="2025-07-12">12 July 2025</time></p>
                </div>
            </a>
        </div>
    </article>
@endsection
