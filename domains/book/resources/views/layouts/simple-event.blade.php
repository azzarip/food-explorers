@extends('book::layouts.base')

@php
    $seo = new SEO(
        title: $offer->title . ' - Food Explorers',
        image: image($offer->slug . '.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('first_column')
    <div x-data="{ 'open': {{ var_export(!auth()->check() && !request()->query('v')) }} || (window.innerWidth >= 1024) }">

        <x-book::event-card :$event :$offer />

        <hr class="max-w-sm mx-auto mt-4 max-lg:hidden lg:my-4">

        <div class="mt-2 space-y-3 max-lg:px-2" x-show="open" x-cloak>
            <h3 class="font-semibold">Terms and Conditions</h3>
            <p>
                You can cancel your participation and receive a 100% reimbursement until
                {{ $offer->getReimbursementTimestamp()->format('j/m/Y \a\t H:i') }}. No refunds will be granted afterwards.
            </p>
            <p>Tickets are not nominal and can be transferred to someone else.</p>
            <p>After that date, access to the Waitling costs 5.- CHF if available.</p>
            <p>If you need tickets for other people send me a message.</p>
        </div>
        <hr class="max-w-sm mx-auto mt-4 lg:hidden lg:my-4">
        <div @click="open = !open" class="px-2 py-1 mx-auto border border-t-0 rounded-b-lg cursor-pointer lg:hidden w-fit">
            <p x-show="open" x-cloak class="text-sm text-gray-600"><x-heroicon-o-chevron-up class="inline w-4 h-4" /> Show
                Less</p>
            <p x-show="!open" x-cloak class="text-sm text-gray-600"><x-heroicon-o-chevron-down class="inline w-4 h-4" />
                Show More</p>
        </div>
    </div>
@endsection
