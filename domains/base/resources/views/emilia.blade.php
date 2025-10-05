@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Emilia Adventure',
        robots: 'noindex, nofollow',
    );
@endphp

@section('body')
<main>
    <div class="max-w-2xl mx-auto px-2">
  <header class="text-center">
    <h1 class="text-3xl font-bold tracking-tight">Emilia</h1>
    <p class="mt-2 text-sm text-gray-500">Reserve your place for the <strong>Emilia Adventure</strong></p>
  </header>

  <div class="mt-6 space-y-3 text-base leading-relaxed">
    <p><span class="font-semibold">Dates:</span> 20–22 February 2026</p>
    <p><span class="font-semibold">Where:</span> Bologna &amp; Modena</p>
    <p><span class="font-semibold">Deposit:</span> CHF 197.– (non-transferable &amp; non-refundable)</p>
    <p>Tap the button to fill in the short reservation form.</p>
  </div>

  <div class="mt-6">
    <a
      href="https://book.stripe.com/6oUeVe1ul7eRcdd9dn9ws04" rel="nofollow"
      class="inline-flex w-full items-center justify-center bg-amber-200 rounded-xl px-5 py-3 text-base font-semibold shadow-sm ring-1 ring-gray-200 hover:ring-gray-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black active:translate-y-px"
    >
      Let’s go →
    </a>
  </div>
    <p>We’ll decide your preferred option later. 3 or 4 days with or without wine.</p>
    </div>
</main>