@extends('azzarip::layouts.base', ['nav' => true, 'bg' => 'bg-gradient-to-b from-rose-50 to-white antialiased'])

@php
    $seo = new SEO(
        title: 'Upcoming Wine Tastings',
        description: 'Stay updated on every wine tasting in Zurich. One simple newsletter with all the best events, dates & insider tips. Free to join today. Stay informed of all wine things in Zurich and surroundings.',
        image: '',
    );
@endphp

@section('body')
<main class="mb-12">
  <h1 class="mt-4 text-3xl font-semibold text-center leading-tight text-gray-900 md:text-4xl space-y-3">Upcoming Tastings</h1>
  <section class="max-w-2xl mx-auto mt-4">
    <div class="border-2 rounded-lg bg-sky-600/60 font-semibold text-center text-2xl p-2 border-slate-800">
        Today, {{ now()->format( 'j F') }}
    </div>
    @dd($dates)
    @foreach ($dates as $date)
    <p>{{ $date->event->title }}</p>
      
    @endforeach
  </section>
</main>
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
      "@type": "Person",
      "@id": "https://www.foodexplorers.ch/#marco",
      "name": "Marco Azzari",
      "jobTitle": "Curator & Editor",
      "worksFor": { "@id": "https://www.foodexplorers.ch/#org" }
    },
    {
      "@type": "WebSite",
      "@id": "https://winetastingszurich.ch/#website",
      "url": "https://winetastingszurich.ch/",
      "name": "Wine Tastings Zürich Newsletter",
      "publisher": { "@id": "https://www.foodexplorers.ch/#org" }
    },
    {
      "@type": "WebPage",
      "@id": "https://winetastingszurich.ch/#webpage",
      "url": "https://winetastingszurich.ch/",
      "name": "Subscribe to Zürich Wine Tastings Newsletter",
      "isPartOf": { "@id": "https://winetastingszurich.ch/#website" },
      "publisher": { "@id": "https://www.foodexplorers.ch/#org" },
      "about": { "@id": "https://winetastingszurich.ch/#newsletter" },
      "potentialAction": {
        "@type": "SubscribeAction",
        "name": "Subscribe to Zürich Wine Tastings Newsletter",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://winetastingszurich.ch/",
          "httpMethod": ["POST"],
          "encodingType": "application/x-www-form-urlencoded"
        },
        "actionPlatform": [
          "https://schema.org/DesktopWebPlatform",
          "https://schema.org/MobileWebPlatform"
        ]
      }
    },
    {
      "@type": ["Service", "CreativeWork"],
      "@id": "https://winetastingszurich.ch/#newsletter",
      "name": "Zürich Wine Tastings Newsletter",
      "description": "A curated weekly email with every wine tasting in Zürich. No spam. Cancel anytime.",
      "isAccessibleForFree": true,
      "provider": { "@id": "https://www.foodexplorers.ch/#org" },
      "creator": { "@id": "https://www.foodexplorers.ch/#org" },
      "inLanguage": ["de-CH", "en"],
      "offers": {
        "@type": "Offer",
        "price": "0.00",
        "priceCurrency": "CHF",
        "availability": "https://schema.org/InStock"
      }
    }
  ]
}
</script>
@endverbatim
@endpush