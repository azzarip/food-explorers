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
            <h1 class="mt-4 text-3xl font-semibold text-center leading-tight text-gray-900 md:text-4xl space-y-3">Wine
                Tastings Calendar</h1>

            <section>
                @if ($dates->isEmpty())
                    <p class="text-2xl lg:text-3xl text-center mt-8">No tastings in the next days...</p>
                @else
                    @foreach ($dates as $day)
                        <div id="{{ $day->date->format('Y-m-d') }}" x-data="{ open: true }" class="w-full mt-4 mb-2 pt-2">

                            <div @click="open = !open" :aria-expanded="open.toString()"
                                class="flex items-center justify-between gap-3 rounded-2xl px-4 py-3 cursor-pointer select-none border
                          @if ($day->isToday()) bg-sky-600/80 text-white shadow-xl  border-sky-700 ring-2 ring-offset-2 ring-sky-400/70
                          @elseif($day->isTomorrow())
                          bg-amber-100 text-amber-900 border border-amber-300 shadow-md ring-1 ring-offset-1 ring-amber-300/60
                          @else
                          bg-white/80 text-black border border-slate-200 shadow-sm hover:shadow transition bg-linear-to-b from-white to-rose-50 via-white  @endif
                          ">
                                <h2 class="font-semibold lg:text-xl text-lg">{{ $day->getLabel() }}</h2>
                                <span class="transition-transform duration-200" x-bind:class="open ? 'rotate-180' : ''">
                                    <x-heroicon-o-chevron-down class="w-6 h-6" />
                                </span>

                            </div>

                            <div x-cloak x-show="open" x-transition.opacity x-transition.duration.200ms
                                class="space-y-3 w-full mt-4">
                                @foreach ($day->items as $date)
                                    <x-winetastings::tasting_card :$date />
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                @endif
            </section>

            <x-winetastings::newsletter-form />
        </main>

        <aside class="flex-1 hidden lg:block lg:w-80 pt-24">
            <x-winetastings::tasting_small_calendar :$tastingDates />
        </aside>
    </div>


    <div x-data="{ sheet: false }" x-on:close-calendar.window="sheet = false" class="lg:hidden">
        <button x-show="!sheet" x-transition @click="sheet = true" type="button"
            class="fixed bottom-4 left-1/2 -translate-x-1/2 z-40
           rounded-full bg-rose-600 px-5 py-3 text-white font-semibold shadow-lg
           ring-1 ring-rose-300">
            <span class="inline-flex items-center gap-2">

                <x-heroicon-o-calendar class="w-5 h-5" />
                Calendar
            </span>
        </button>

        <!-- Overlay -->
        <div x-cloak x-show="sheet" x-transition.opacity x-trap.noscroll="sheet" class="fixed inset-0 z-40 bg-black/40"
            @click="sheet=false" @keydown.escape.window="sheet=false"></div>

        <section x-trap.noscroll="sheet" x-cloak x-show="sheet" role="dialog" aria-modal="true"
            aria-labelledby="calendarSheetTitle"
            class="fixed inset-x-0 bottom-0 z-50 max-h-[85vh]
           rounded-t-2xl bg-white shadow-2xl ring-1 ring-slate-200
           pb-[env(safe-area-inset-bottom)]"
            x-transition:enter="transform ease-out duration-300" x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0" x-transition:leave="transform ease-in duration-200"
            x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full">

            <div class="mx-auto max-w-2xl">
                <div class="flex justify-center pt-3">
                    <div class="h-1.5 w-12 rounded-full bg-slate-300"></div>
                </div>
                <div class="text-right mr-4">
                    <button class="p-2 rounded-full hover:bg-slate-100" @click="sheet=false" type="button"
                        aria-label="Close calendar">
                        <x-heroicon-o-x-mark class="w-6 h-6" />
                    </button>
                </div>

                <div class="mt-2 px-4 pb-6 h-fit">
                    <x-winetastings::tasting_small_calendar :$tastingDates />
                </div>
            </div>
        </section>
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
