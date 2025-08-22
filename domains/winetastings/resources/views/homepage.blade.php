@extends('azzarip::layouts.base', ['nav' => false])

@php
    $seo = new SEO(
        title: 'Wine Tastings in Zürich',
        description: 'Stay updated on every wine tasting in Zurich. One simple newsletter with all the best events, dates & insider tips. Free to join today. Stay informed of all wine things in Zurich and surroundings.',
        image: '',
    );
@endphp

@section('body')
<main class="mb-12">
    <section class="w-full min-h-screen flex items-center bg-gradient-to-b from-rose-50 to-white antialiased">
      <div class="mx-auto max-w-3xl px-6">
        <div class="text-center mt-2">
            <p class="text-xl lg:text-3xl px-12">A Message for Serious Wine Lovers Only! </p>
          <h1 class="mt-4 text-3xl font-extrabold leading-tight text-gray-900 sm:text-4xl md:text-5xl space-y-3">
                <p>
                    Never Miss Another Wine Tasting Again
                </p>
                <p class="font-semibold">
                    Join the <span class="font-bold mt-1 bg-gradient-to-r from-rose-600 to-fuchsia-600 bg-clip-text text-transparent">Zurich Wine Compass</span> and stay one glass ahead.
                </p>
                <p class="text-2xl lg:text-4xl font-extrabold">Don’t let the next bottle be opened without you 🍾</p>
          </h1>

          <p class="mx-auto mt-4 w-fit px-8 py-2 border-cyan-600 font-semibold text-base md:text-lg bg-gradient-to-r from-blue-600 to-cyan-800 border-2 rounded-full bg-clip-text text-transparent">
            Every Zürich Wine Tasting · One weekly email · Zero spam.
          </p>
        </div>

        <div class="mx-auto mt-6 lg:mt-12 max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4" id="form">
            <p class="text-xl lg:text-3xl font-bold mb-2 text-center">Join the Zurich Wine Compass!</p>

          <x-forms::base class="mx-auto max-w-lg" name="newsletter-form" id="newsletter-form">
            <x-forms::field.email />
            <div class="space-y-4 ml-2">
            <x-forms::field.privacy_policy />
            <div style="padding-top: 4px;">
                <div class="inline-flex items-start">
                <input type="checkbox" name="age" id="age" class="w-4 h-4 mt-1" required>
                <label for="age" class="ml-2">I am 18  years old or older.</label>
        </div>
        </div>
</div>

            <button
              type="submit"
              class="w-full rounded-xl bg-rose-600 px-6 py-3 text-base cursor-pointer font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200"
            >
              Yes, I want to be informed about wine tastings in Zurich!
            </button>
          </x-forms::base>

      <p class="mt-4 w-fit mx-auto items-center gap-2 rounded-full border border-rose-200 bg-white/70 px-3 py-1 text-xs font-medium text-rose-700 shadow-sm backdrop-blur">
            🍷 Curated weekly · Cancel anytime
          </p>
        </div>
        </ul>
      </div>
    </section>
    <article class="mx-auto max-w-3xl px-2 mt-8 space-y-3 lg:text-xl">
        <p class="text-xl lg:text-2xl font-serif">Dear Wine Lover,</p>
        <p>How many times did you found out <strong>too late</strong> about an incredible wine event?</p>
        <p>Or, how often do you forget about that new tasting in Zurich?</p>
        <p>... <em>if only I had known</em>...</p>
        <p class="font-semibold">That ends today.</p>
        <p>Because I’m about to hand you something no one else in Zürich has ever put together before:</p>
        <div class="text-center px-12 font-bold text-2xl leading-relaxed">
            👉 The only complete insider calendar of every single wine tasting happening in Zürich — delivered straight to your inbox, before the corks are even pulled.
        </div>
        <p>❌ No searching.</p>
        <p>❌ No remembering.</p>
        <p>❌ No relying on your calendar.</p>
        <p>With the <strong>Zurich Wine Compass</strong>, you’ll always know when and where the next tasting is happening — and you’ll never miss any bottle again.</p>

        <h2 class="mt-8 font-bold lg:text-3xl">Let's be honest...</h2>
        <p>Zurich is full of wine tastings, but often they are hidden on wine shop websites.</p>
        <p>Or buried in mailing lists.</p>
        <p>You have to spend hours hunting, looking at emails nobody reads, and often you hear about them <em>only after</em> they happened.</p>

        <p>This is why <strong>most wine lovers</strong> in Zurich end up missing the best events.</p>
        <p>Many people just end up going to the most famous ones, just because they are the most advertised...</p>
        <p>...you know, no? the one on the boats...</p>
        <p>By the time people hear of a certain event, the spots are gone or the date has passed. </p>
        <p>The corks are pulled. The magic is over.</p>
        <h2 class="mt-8 font-bold text-xl md:text-2xl  lg:text-2xl text-center">The Zurich Wine Compass</h2>
        <p>Zurich Wine Compass is your <strong>weekly email</strong> that informs you about all the upcoming events in the city.</p>
        <p>No Bern. No Basel. No random city 2 hours of train away.</p>
        <p>Only Zurich and its close surroundings.</p>
        <p>That’s exactly what you get with the Zurich Wine Compass.</p>
        <p>Here’s what it means for you:</p>
        <ul class="space-y-2">
            <li>🍷 <strong>Every tasting in one place</strong> — no more endless scrolling, searching, or asking around.</li>
            <li>🥂 <strong>Weekly delivery</strong> — always on time, always up-to-date.</li>
            <li>🍇 <strong>Stay one glass ahead</strong> — you’ll hear before the seats are gone.</li>
            <li>🗓️ <strong>Never miss the good ones</strong> — from hidden gems to major events.</li>
        </ul>
        <p>All curated. All simplified. All for you.</p>
        <a href="#form" >
            <div class="text-center my-4 w-full rounded-xl bg-rose-600 px-6 py-3 text-base cursor-pointer font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200">
            Yes, I want to join the Zurich Wine Compass!
        </div></a>
        <h2 class="mt-8 font-bold text-xl md:text-2xl  lg:text-2xl">Gratis for you, for now...</h2>
        <p>I am building this tool for my wine lover friends.</p>
        <p>It is gratis now, but I may change idea in the future.</p>
        <p>If you wait, you risk missing the next tasting.</p>
        <p>And missing this tool for ever.</p>
        <p>If you act now, you’ll be in.</p>
        <p>We also have a Whatsapp and Telegram Channel if you prefer these over emails.</p>

                <h2 class="mt-8 font-bold text-xl md:text-2xl  lg:text-2xl">Who is behind the Zurich Wine Compass?</h2>
                <p>Hi, nice to meet you if you read so far down!</p>
                <p>My name is <strong>Marco</strong>, Italian, and I am a wine lover and live in Zurich.</p>
                <p>I am on the Top Wine Drinkers in Vivino, I am around 50th (changes everyday).</p>
                <p>You can find me in almost all the wine tastings of Zurich, when I am free I try to go...</p>
                <p>This is why I built this newsletter, to inform first my self and then my friends.</p>
                <p>I hope you enjoy it too!</p>
                <p class="text-right font-serif lg:text-2xl">Marco</p>



    </article>
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