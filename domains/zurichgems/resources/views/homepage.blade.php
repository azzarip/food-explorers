@extends('azzarip::layouts.base', [])

@php
    $seo = new SEO(
        title: 'Zurich Gems - Best Foodie Spots in Zurich',
        description: 'Zurich Gems - discover the best restaurants, bars, and hidden foodie spots in Zurich. Curated by locals, updated weekly, and focused on honest reviews of places worth your time.',
        image: '',
    );
@endphp

@section('body')
<main class="min-h-screen relative overflow-hidden">
        
    <div class="absolute inset-0 -z-10 bg-gradient-to-b from-amber-50 via-white to-white max-lg:opacity-50"></div>
  <div class="absolute -top-24 -right-32 h-80 w-80 rounded-full bg-amber-200/40 blur-3xl max-lg:opacity-50"></div>
  <div class="absolute -bottom-24 -left-32 h-80 w-80 rounded-full bg-amber-300/30 blur-3xl max-lg:opacity-50"></div>

<section class="">


  <div class="">
      <div class="max-w-3xl mx-auto px-2 max-lg:mt-12">
        <h2 class="text-center text-2xl lg:text-4xl font-bold mt-4 lg:mt-12">For Serious Foodies Only</h2>
        <h1 class="mt-4 text-4xl text-center font-extrabold tracking-tight leading-snug text-gray-900 sm:text-5xl lg:text-6xl">
          Not Every Place in Zurich Is Worth Your Time <br>  <span class="bg-gradient-to-r from-amber-600 to-amber-400 bg-clip-text text-transparent">Here’s Where You Find The Real Gems 
</span> <span aria-hidden="true">💎</span>
        </h1>

        <p class="mt-4 lg:mt-6 max-w-2xl text-base leading-relaxed text-gray-700 sm:text-lg">
          Stop doom-scrolling mediocre lists. Get the <span class="font-semibold text-gray-900">real</span> Zürich for foodies. 
          Only the best <span class="font-semibold">foodie spots worth your time</span>, handpicked, tested and mapped ready for you. 
          So you can skip the guesswork and taste the city like an insider.
        </p>

        <!-- Proof chips -->
        <ul class="mt-4 lg:mt-6 flex flex-wrap gap-2 text-sm text-gray-600">
            <li class="flex mx-auto rounded-full border border-amber-200 bg-white px-3 py-1 text-xs font-medium text-amber-700 shadow-sm backdrop-blur">
          Curated by locals
        </li>
            <li class="flex mx-auto rounded-full border border-amber-200 bg-white px-3 py-1 text-xs font-medium text-amber-700 shadow-sm backdrop-blur">
          No paid placements
        </li>
<li class="flex mx-auto rounded-full border border-amber-200 bg-white px-3 py-1 text-xs font-medium text-amber-700 shadow-sm backdrop-blur">
          Short honest reviews
        </li>
        </ul>

</section>

<section class="mt-12">
    <div class="max-w-2xl mx-auto px-2">
        <a href="/gelato">
        <div class="bg-emerald-600 w-full rounded-md py-4 text-white text-center font-semibold text-2xl lg:text-3xl shadow-2xl backdrop-blur-lg">
            🍧 Best Gelato
        </div>
        </a>
    </div>
</section>


</main>
@endsection

@push('head')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.zurichgems.ch/#organization",
      "name": "Food Explorers",
      "url": "https://foodexplorers.ch",
      "legalName": "Food Explorers",
      "logo": {
        "@type": "ImageObject",
        "@id": "https://www.zurichgems.ch/#org-logo",
        "url": "https://www.zurichgems.ch/logo.png"
      }
    },
    {
      "@type": "Person",
      "@id": "https://www.zurichgems.ch/#person",
      "name": "Marco Azzari",
      "url": "https://www.zurichgems.ch",
      "worksFor": {
        "@id": "https://www.zurichgems.ch/#organization"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://www.zurichgems.ch/#website",
      "url": "https://www.zurichgems.ch",
      "name": "Zurich Gems",
      "inLanguage": "en-CH",
      "publisher": {
        "@id": "https://www.zurichgems.ch/#organization"
      },
      "creator": {
        "@id": "https://www.zurichgems.ch/#person"
      },
      "isAccessibleForFree": true
    },
    {
      "@type": "WebPage",
      "@id": "https://www.zurichgems.ch/#webpage",
      "url": "https://www.zurichgems.ch/",
      "name": "Zurich Gems — Zurich Best Foodie Spots",
      "isPartOf": {
        "@id": "https://www.zurichgems.ch/#website"
      },
      "about": {
        "@id": "https://www.zurichgems.ch/#website"
      },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "@id": "https://www.zurichgems.ch/#hero-image",
        "url": "https://www.zurichgems.ch/og-image.jpg"
      },
      "description": "Handpicked, tested, and mapped foodie gems in Zurich. No paid placements, short honest reviews, and insider picks—so you skip the guesswork and taste the real city.",
      "datePublished": "2025-09-01",
      "dateModified": "2025-09-18",
      "inLanguage": "en-CH",
      "publisher": {
        "@id": "https://www.zurichgems.ch/#organization"
      },
      "copyrightHolder": {
        "@id": "https://www.zurichgems.ch/#organization"
      }
    }
  ]
}
</script>
@endpush