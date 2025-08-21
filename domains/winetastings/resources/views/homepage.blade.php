@extends('azzarip::layouts.base', ['nav' => false])

@php
    $seo = new SEO(
        title: 'Wine Tastings Zürich – Insider Newsletter',
        description: 'Stay updated on every wine tasting in Zurich. One simple newsletter with all the best events, dates & insider tips. Free to join today. Stay informed of all wine things in Zurich and surroundings.',
        image: '',
    );
@endphp

@section('body')
<main>
    <section class="w-full min-h-screen flex items-center bg-gradient-to-b from-rose-50 to-white antialiased">
      <div class="mx-auto max-w-3xl px-6">
        <div class="text-center">

          <h1 class="mt-6 text-3xl font-extrabold leading-tight text-gray-900 sm:text-4xl md:text-5xl">
            The Only Newsletter That Tells You
            <span class="block mt-1 bg-gradient-to-r from-rose-600 to-fuchsia-600 bg-clip-text text-transparent">
              Every Wine Tasting in Zürich
            </span>
             direct in your inbox!
          </h1>

          <p class="mx-auto mt-4 max-w-2xl text-base text-gray-800 md:text-lg">
            Skip the spam. Get every Zürich wine tasting event in one simple newsletter.
          </p>
        </div>

        <div class="mx-auto mt-6 lg:mt-12 max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4">
          <x-forms::base class="">
            <x-forms::field.email />
            <x-forms::field.privacy_policy />
        
            <button
              type="submit"
              class="w-full rounded-xl bg-rose-600 px-6 py-3 text-base font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200"
            >
              Yes, I want to be informed about wine tastings in Zurich!
            </button>
          </x-forms::base>

      <p class="mt-4 w-fit mx-auto items-center gap-2 rounded-full border border-rose-200 bg-white/70 px-3 py-1 text-xs font-medium text-rose-700 shadow-sm backdrop-blur">
            🍷 Curated weekly · No spam · Cancel anytime
          </p>
        </div>

        <!-- Micro-benefits -->
        <ul class="mx-auto mt-6 grid max-w-2xl grid-cols-1 gap-3 text-sm text-black sm:grid-cols-3">
          <li class="flex items-center justify-center gap-2 rounded-xl bg-white px-3 py-2 shadow-sm ring-1 ring-gray-100">
            ✅ All tastings in one place
          </li>
          <li class="flex items-center justify-center gap-2 rounded-xl bg-white px-3 py-2 shadow-sm ring-1 ring-gray-100">
            ✅ Curated, no fluff
          </li>
          <li class="flex items-center justify-center gap-2 rounded-xl bg-white px-3 py-2 shadow-sm ring-1 ring-gray-100">
            ✅ Unsubscribe with one click
          </li>
        </ul>
      </div>
    </section>
</main>
@endsection
