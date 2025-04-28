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
    <article class="max-w-2xl mx-auto px-2 mb-8">
        <div class="max-lg:px-2 mt-2 space-y-4">
            <div class="lg:bg-yellow-200 p-1 pb-2 rounded w-full">
            <h1 class="font-serif text-3xl font-semibold mt-4 text-center">Thank you!</h1>
            <p class="text-center text-xl lg:text-2xl">You have joined the waiting list</p>
        </div>
            <p>But wait...</p>
            <h1 class="font-serif text-3xl font-semibold mt-4 text-center">Receive the Paris program directly at home!</h1>
            <p class=" text-center"> <strong>Completely free</strong> and <strong>Not Binding</strong></p>
            <p>I’m preparing a beautiful booklet for you: filled with all the information, inspiring photos, and the full program of our trip. </p>

            <div class="lg:my-4">
                <x-forms::address.new backUrl="/ty/paris/final" />
            </div>
            <p><strong>When it is ready</strong>, you will receive it directly in your letterbox and a special
                bonus :), nothing will be charged. </p>

            <div class="space-y-3 mt-1">
                <h2 class="h2">Why for free?</h2>
                <p>I know that today everything happens through a screen: Instagram, Linkedin, etc...</p>
                <p>One of the reasons I organize these trips is to create a <strong>real escape</strong>: to bring you out
                    of Zurich, away from the routine, away from work emails buzzing in your pocket.</p>
                <p>Just you, your passions, amazing foods and drinks and a weekend that feels like a breath of fresh air.
                </p>
                <p>For the same reason, I will personally print the entire program and send it to you, at my own expenses.
                </p>
                <p>Because I believe in real experiences. Because I want you to feel, even before the trip begins, how much
                    care and love I put into <strong>crafting every detail</strong>.</p>
                <p class="text-right">Marco</p>

                <p class="mt-2"> <strong>P.S.</strong> If you are not interested, just ignore this, you will still receive
                    the invitation but only via email.</p>
            </div>
        </div>
    </article>
@endsection
