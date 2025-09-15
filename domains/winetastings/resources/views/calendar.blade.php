@extends('azzarip::layouts.base', ['nav' => true, 'bg' => 'bg-gradient-to-b from-rose-50 to-white antialiased'])

@php
    $seo = new SEO(
        title: 'Wine Tasting Calendar',
        description: 'Explore all upcoming wine tastings in Zürich with our easy-to-use calendar. Stay up to date with the city\'s best wine events and never miss a glass again.',
        image: '',
    );
@endphp

@section('body')
    <div class="flex w-full">
        <div class="flex-1 max-lg:hidden"></div>
        <main class="mb-12 max-w-2xl mx-auto w-full px-2 flex-shrink-0">
            <h1 class="mt-4 text-3xl font-semibold text-center leading-tight text-gray-900 md:text-4xl space-y-3">Tasting Calendar</h1>

            <section>
                @if ($dates->isEmpty())
                    <p class="text-2xl lg:text-3xl text-center mt-8">No tastings in the next days...</p>
                @else
                    @foreach ($dates as $ymd => $dailyDates)
                        <div id="{{ $ymd }}" x-data="{ open: true }" class="w-full mt-4 mb-2 pt-2">

                            @if ($ymd == $today && !$dailyDates->isEmpty())
                                <div @click="open = !open" :aria-expanded="open.toString()"
                                    class="flex items-center justify-between gap-3 rounded-2xl px-4 py-3 cursor-pointer select-none
             bg-sky-600/80 text-white shadow-xl border border-sky-700
             ring-2 ring-offset-2 ring-sky-400/70">
                                    <h2 class="font-semibold text-2xl">Today, {{ now()->format('j F') }}</h2>
                                    <span class="transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''">
                                        <x-heroicon-o-chevron-down class="w-6 h-6" />
                                    </span>

                                </div>
                            @elseif($ymd == $tomorrow && !$dailyDates->isEmpty())
                                <h2 @click="open = !open" :aria-expanded="open.toString()"
                                    class="flex items-center justify-between gap-3 rounded-2xl px-4 py-3 cursor-pointer select-none
             bg-amber-100 text-amber-900 border border-amber-300
             shadow-md ring-1 ring-offset-1 ring-amber-300/60">
                                    <span class="font-semibold text-xl">Tomorrow,
                                        {{ now()->addDay()->format('j F') }}</span>
                                    <span class="transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''">
                                        <x-heroicon-o-chevron-down class="w-6 h-6" />
                                    </span>
                                </h2>
                            @else
                                <h2 @click="open = !open" :aria-expanded="open.toString()"
                                    class="flex items-center justify-between gap-3 rounded-xl px-4 py-2 cursor-pointer select-none
             bg-white/80 text-slate-800 border border-slate-200
             shadow-sm hover:shadow transition">
                                    <span class="font-semibold">
                                        {{ \Carbon\Carbon::parse($ymd)->format('j F Y, l') }}
                                    </span>
                                    <span class="transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''">
                                        <x-heroicon-o-chevron-down class="w-6 h-6" />
                                    </span>
                                </h2>
                            @endif

                            <div x-cloak x-show="open" x-transition.opacity x-transition.duration.200ms
                                class="space-y-3 w-full mt-4">
                                @foreach ($dailyDates as $date)
                                    <x-winetastings::tasting_card :$date />
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                @endif
            </section>

            <section>
                <div class="mx-auto mt-6 lg:mt-12 max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4"
                    id="form">
                    <p class="text-xl lg:text-3xl font-bold mb-2 text-center">Join the Zurich Wine Compass!</p>
                    <p class="text-center lg:text-xl">Never miss a Wine Tasting in Zurich again.</p>
                    <x-forms::base class="mx-auto max-w-lg" action="/" name="newsletter-form" id="newsletter-form">
                        <x-forms::field.email />
                        <div class="space-y-4 ml-2">
                            <x-forms::field.privacy_policy />
                            <div style="padding-top: 4px;">
                                <div class="inline-flex items-start">
                                    <input type="checkbox" name="age" id="age" class="w-4 h-4 mt-1" required>
                                    <label for="age" class="ml-2">I am 18 years old or older.</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full rounded-xl bg-rose-600 px-6 py-3 text-base cursor-pointer font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200">
                            Yes, I want to be informed about wine tastings in Zurich!
                        </button>
                    </x-forms::base>

                    <p
                        class="mt-4 w-fit mx-auto items-center gap-2 rounded-full border border-rose-200 bg-white/70 px-3 py-1 text-xs font-medium text-rose-700 shadow-sm backdrop-blur">
                        🍷 Curated weekly · Cancel anytime
                    </p>
                </div>
            </section>
        </main>

        <aside class="flex-1 hidden lg:block lg:w-80">
            <x-winetastings::tasting_small_calendar :$tastingDates />
        </aside>
    </div>
@endsection



@push('head')
    @verbatim
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.foodexplorers.ch/#org",
      "name": "Food Explorers",
      "url": "https://www.foodexplorers.ch/",
      "logo": {
        "@type": "ImageObject",
        "@id": "https://www.foodexplorers.ch/#logo",
        "url": "https://www.foodexplorers.ch/images/logo_big.webp"
      },
      "founder": { "@id": "https://www.foodexplorers.ch/#marco" }
    },
    {
      "@type": "WebSite",
      "@id": "https://winetastingszurich.ch/#website",
      "url": "https://winetastingszurich.ch/",
      "name": "Wine Tastings Zürich",
      "publisher": { "@id": "https://www.foodexplorers.ch/#org" },
      "inLanguage": ["de-CH","en"]
    },
    {
      "@type": "WebPage",
      "@id": "https://winetastingszurich.ch/upcoming#webpage",
      "url": "https://winetastingszurich.ch/upcoming",
      "name": "Upcoming Wine Tastings in Zürich",
      "isPartOf": { "@id": "https://winetastingszurich.ch/#website" },
      "publisher": { "@id": "https://www.foodexplorers.ch/#org" },
      "description": "Discover all upcoming wine tastings in Zürich in one simple calendar. Updated regularly with the best events in the city.",
      "about": {
        "@type": "Thing",
        "name": "Wine Tastings Calendar Zürich",
        "description": "An overview of all wine tastings happening in Zürich, organized in an easy-to-use calendar format."
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://winetastingszurich.ch/upcoming#breadcrumbs",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https://winetastingszurich.ch/",
            "name": "Home"
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https://winetastingszurich.ch/upcoming",
            "name": "Upcoming Tastings"
          }
        }
      ]
    }
  ]
}
</script>
    @endverbatim
@endpush
