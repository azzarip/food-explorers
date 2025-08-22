@extends('azzarip::layouts.base', ['nav' => false])

@php
    $seo = new SEO(
        title: 'Wine Tastings Zürich',
        description: '',
        image: '',
        robots: 'noindex, nofollow'
    );
@endphp

@section('body')
<main class="min-h-screen flex items-center">
    <section class="w-full">
      <div class="mx-auto max-w-3xl px-6 mt-2">

        <!-- Hero / Success -->
        <div class="text-center">
          <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-emerald-100 shadow-xl ring-1 ring-gray-100">
            <!-- Check Icon -->
            <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true" class="text-emerald-600">
              <path fill="currentColor" d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z"/>
            </svg>
          </div>

          <h1 class="mt-6 text-3xl font-extrabold leading-tight text-gray-900 sm:text-4xl">
            You’re in. 🍷
          </h1>
          <p class="mx-auto mt-3 max-w-2xl text-base text-gray-700 md:text-lg">
            You’ll receive the next <strong>Zürich Wine Tastings</strong> roundup by email.
            For faster alerts, join our update channel below. No spam. Cancel anytime.
          </p>
        </div>

        <!-- CTA Buttons -->
        <div class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-4 sm:grid-cols-2">
          <!-- WhatsApp -->
          <a
            href="https://whatsapp.com/channel/0029Vb6OTki0LKZAnzaB7I21"
            target="_blank" rel="noopener noreferrer"
            class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-emerald-600 px-6 py-4 text-white shadow-lg ring-1 ring-emerald-500/20 transition hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-emerald-200"
            aria-label="Join WhatsApp Channel"
          >
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/512px-WhatsApp.svg.png?20220228223904" alt="Whatsapp Icon" class="w-24 aspect-auto">
            <span class="text-base font-semibold">Join WhatsApp Channel</span>
          </a>

          <a
            href="t.me/winetastingszurich"
            target="_blank" rel="noopener noreferrer"
            class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-sky-600 px-6 py-4 text-white shadow-lg ring-1 ring-sky-500/20 transition hover:bg-sky-700 focus:outline-none focus:ring-4 focus:ring-sky-200"
            aria-label="Join Telegram Channel"
          >
            <img src="https://cdn.worldvectorlogo.com/logos/telegram-1.svg" alt="Telegram Icon" class="w-24 aspect-auto">
            <span class="text-base font-semibold">Join Telegram Channel</span>
          </a>
        </div>

        <div class="mx-auto mt-10 max-w-2xl rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-100">
          <h2 class="text-lg font-semibold text-gray-900">What happens next</h2>
          <ul class="mt-3 space-y-2 text-sm text-gray-700">
            <li class="flex gap-2"><span class="mt-1">✅</span><span>Weekly roundup of every wine tasting in Zürich.</span></li>
            <li class="flex gap-2"><span class="mt-1">✅</span><span>Occasional fast alerts via WhatsApp/Telegram for limited spots.</span></li>
            <li class="flex gap-2"><span class="mt-1">✅</span><span>No spam. Unsubscribe from any channel anytime.</span></li>
          </ul>
        </div>

        <p class="mx-auto mt-8 max-w-2xl text-center text-xs text-gray-500">
         <a href="/" class="underline hover:text-gray-700">Return to the homepage</a>.
        </p>
      </div>
    </section>
  </main>
@endsection