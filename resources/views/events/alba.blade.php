@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
$seo = new SEO(
    title: 'ALBA Sourdough Secret - Exclusive Pizza Tasting',
    description: '9 April 2026 at 19:00, join us for a pizza and cocktail tasting event at Sourdough pizza at Alba',
    image: image('alba_pizza.png'),
);
@endphp

@section('main')

<article class="max-w-2xl mx-auto px-4 pt-8">
<div class="bg-white/70 rounded-xl shadow-lg border border-amber-100 py-12 px-6 mb-8">
    <h1 class="font-serif text-5xl lg:text-7xl xl:text-8xl font-extrabold text-neutral-900 leading-[0.95] tracking-tight text-center mb-6">
        The pizza <span class="text-amber-700 underline decoration-amber-400 decoration-4 underline-offset-8">tasting</span> you won’t find on any menu
    </h1>

    <p class="mt-10 max-w-2xl mx-auto text-center text-2xl lg:text-3xl font-medium text-amber-900 italic tracking-wide leading-relaxed">
        A private sourdough tour through Alba, featuring
        <span class="bg-amber-50 border-b-[3px] border-amber-400 px-2 italic rounded-md shadow-sm">unexpected cocktail pairings</span>
        that redefine the palate.
    </p>

    <div class="rounded-lg overflow-hidden shadow-md border border-neutral-200 mt-8">
        <img src="{{ image('alba_pizza.png') }}" alt="Alba Tasting" class="w-full h-auto object-cover transition-transform duration-200 hover:scale-[1.02]">
    </div>

    <p class="text-center text-lg lg:text-xl font-semibold text-neutral-700 mt-10 mb-2 uppercase tracking-widest">
        <span class="inline-block px-3 py-1 ">
            Thursday 9 April at 19:00
        </span>
        <br>
        <span class="inline-block mt-2">
            Alba Wiedikon&nbsp;|&nbsp;
            <a href="https://maps.app.goo.gl/xmCFg6jS4FHWVEUD6" target="_blank" rel="noopener noreferrer" class="text-amber-700 underline decoration-amber-400 decoration-2 underline-offset-2 hover:text-amber-900 transition">
                Maps
                <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1 ml-1" />
            </a>
        </span>
    </p>
</div>

    <div class="space-y-6 mt-8 text-gray-800 leading-relaxed">
        <p class="text-xl lg:text-3xl">
            <strong>Dear Pizza Lover,</strong>
        </p>
        <p>For this evening, I would like to invite you to a special evening at Alba.</p>
              <p>
            This event is a <strong>pizza tasting</strong> with a <strong>cocktail taster</strong> woven through the night
        </p>
        <p>A <em>touch of Alba</em> that goes beyond the plate.</p>
        <p>We’ll move from slice to sip so you can feel how Alba thinks about flavour, balance, and generosity in one sitting.</p>

        <p>
            That spirit lives in <strong>Alba Bar</strong>, their cocktail corner built to match the kitchen.
        </p>
        <p>It’s there so the sourdough story doesn’t stop at the crust.</p>
        <p>Alba is well known for its pizza, less known for its cocktails.</p>
        <p>We will taste a selection of their cocktails, and you will be able to choose from a <strong>menu crafted for us</strong>, for this event.</p>
        <div class="my-8 p-6 bg-amber-50 border-l-4 border-amber-300 rounded-lg shadow-sm">
            <h2 class="text-xl lg:text-2xl font-bold text-amber-800 mb-2">What is a pizza tasting?</h2>
            <p class="text-base lg:text-lg text-gray-700">
                Instead of ordering just one pizza, you’ll have many pizzas arriving in various rounds, so you can taste them together. It’s a unique opportunity to explore different combinations, flavors, and styles—all in one evening, without limits.
            </p>
        </div>

        <img src="https://cdn.prod.website-files.com/65f15b1071255e3999b38f40/66360ad5b86c9e9e0de5ee18_ALBA_RES_WEB_HEADER_FORMAT-p-2000.avif" alt="Alba Bar" class="w-full h-auto object-cover transition-transform duration-200 hover:scale-[1.02] rounded-md">
                <div class="flex justify-center my-8">
                    <div class="flex-1 max-w-xl mx-auto border-2 border-amber-400 rounded-xl bg-white/80 shadow-lg px-6 py-6 text-center">
                        <p class="font-serif text-lg md:text-xl font-semibold text-gray-900 mb-2 leading-snug">
                            <span class="block mb-1">Falstaff calls it</span>
                            <span class="block text-amber-600 text-2xl md:text-3xl font-bold">“Best pizza in town.”</span>
                        </p>
                        <ul class="list-none pl-0 text-gray-700 space-y-1 mb-2">
                            <li>
                                <span class="font-medium text-amber-800">Gault Millau</span>
                                <span>has officially recognized their craft.</span>
                            </li>
                            <li>
                                <span class="font-medium text-amber-800">Swiss press</span>
                                <span>named Alba the <strong class="uppercase">"Pop of the Year"</strong>.</span>
                            </li>
                        </ul>
                        <p class="text-gray-500 italic text-base">This is one of the hottest Pizza in Zurich for a reason.</p>
                    </div>
                </div>

        <div class="text-center py-8">
            <h3 class="text-2xl font-bold mb-2 uppercase">Join Us at Alba</h3>
            <div class="max-w-sm mx-auto">
                <x-button link='#event'>To the event</x-button>
            </div>

            <p class="mt-4 text-sm text-gray-600">WARNING: Seats are strictly limited to ensure an intimate tasting experience. Once they're gone, they're gone.</p>
        </div>
    </div>


<section id="event" class="my-10 -mx-4 sm:mx-0 rounded-2xl overflow-hidden border-2 border-amber-200 shadow-xl bg-gradient-to-b from-amber-50/90 via-white to-stone-50">
    <div class="relative">
        <div class="aspect-[21/9] sm:aspect-[2.4/1] max-h-56 sm:max-h-72 w-full overflow-hidden">
            <img src="{{ image('alba_pizza.png') }}" alt="Alba sourdough pizza" class="w-full h-full object-cover" width="1200" height="514" decoding="async">
            <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/75 via-neutral-900/25 to-transparent"></div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 px-4 pb-5 pt-12 text-center">
            <p class="text-amber-200/90 text-xs font-semibold uppercase tracking-[0.35em] mb-1">Alba × Food Explorers</p>
            <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl font-bold text-white drop-shadow-md tracking-tight">
                Some of the pizza you will taste
            </h2>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-8 space-y-6">

        <div class="space-y-4">
            <article class="rounded-xl border border-amber-100 bg-white/80 shadow-sm px-4 py-4 sm:px-5 sm:py-5 hover:border-amber-300/80 transition-colors">
                <h3 class="font-serif text-xl font-bold text-neutral-900 flex flex-wrap items-baseline gap-2">
                    Margherita
                    <span class="text-xs font-sans font-semibold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded">v</span>
                </h3>
                <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                    Brigade passata · Alba mozzarella · Parmigiano Reggiano · Basil
                </p>
            </article>
            <article class="rounded-xl border border-amber-100 bg-white/80 shadow-sm px-4 py-4 sm:px-5 sm:py-5 hover:border-amber-300/80 transition-colors">
                <h3 class="font-serif text-xl font-bold text-neutral-900">Spicy Salami</h3>
                <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                    Brigade passata · Alba mozzarella · Spicy salami from Ticino · Parmigiano Reggiano
                </p>
            </article>
            <article class="rounded-xl border border-amber-100 bg-white/80 shadow-sm px-4 py-4 sm:px-5 sm:py-5 hover:border-amber-300/80 transition-colors">
                <h3 class="font-serif text-xl font-bold text-neutral-900">Funghi and Prosciutto 2.0</h3>
                <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                    Brigade passata · Alba mozzarella · Miso mushrooms · Swiss smoked ham · Parmigiano Reggiano · Maggia pepper
                </p>
            </article>
            <article class="rounded-xl border border-amber-100 bg-white/80 shadow-sm px-4 py-4 sm:px-5 sm:py-5 hover:border-amber-300/80 transition-colors">
                <h3 class="font-serif text-xl font-bold text-neutral-900">Inferno 2.0</h3>
                <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                    Brigade passata · Alba mozzarella · Swiss ’Nduja · Hot honey · Pimientos de Padrón
                </p>
            </article>
            <article class="rounded-xl border border-amber-100 bg-white/80 shadow-sm px-4 py-4 sm:px-5 sm:py-5 hover:border-amber-300/80 transition-colors">
                <h3 class="font-serif text-xl font-bold text-neutral-900 flex flex-wrap items-baseline gap-2">
                    Ricotta be kidding
                    <span class="text-xs font-sans font-semibold uppercase tracking-wider text-amber-700 bg-amber-100 px-2 py-0.5 rounded">v</span>
                </h3>
                <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                    Alba mozzarella · Ricotta · Spinach · Hazelnuts · Preserved lemons &amp; chilli oil
                </p>
            </article>
        </div>


        <div class="flex gap-3 rounded-xl px-4 py-4 sm:px-5 sm:py-4 shadow-sm" role="note">
            <span class="shrink-0 mt-0.5 text-rose-600">
                <x-heroicon-o-exclamation-triangle class="w-6 h-6" />
            </span>
            <div class="text-sm text-neutral-800 leading-relaxed">
                <strong class="text-rose-900">Allergies &amp; ingredients</strong>
                <p class="mt-1">
                    Please <strong>inform us of any allergies or dietary needs</strong> when you book or before the event, and double-check with Alba staff on the night. We’re happy to help you navigate the menu safely.
                </p>
            </div>
        </div>
    </div>
</section>



<div class="px-4 max-w-md mx-auto my-8">
    <x-button link="#booking">
    Click here to reserve your seat!
    </x-button>
</div>

<div class="my-8 max-w-2xl mx-auto">
    <div class="bg-gradient-to-br from-amber-100 to-yellow-50 border-4 border-amber-400 rounded-2xl shadow-md p-6">
        <div class="flex items-center mb-4">
            <svg class="w-9 h-9 text-yellow-500 mr-3 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l2 2 4-4"/>
            </svg>
            <h2 class="text-2xl font-bold text-amber-800 font-serif tracking-tight">Special Booking Bonuses</h2>
            <p>Booking now will get you a small gift included:</p>
        </div>
        <ul class="list-none space-y-4 px-2 sm:px-4">
            <li class="flex items-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-white border border-amber-300 rounded-full mr-3">
                    <x-heroicon-o-sparkles class="w-5 h-5 text-yellow-500"/>
                </span>
                <span class="text-lg text-gray-800"><strong>Chef’s Appetizer Entrée</strong>: enjoy a special amuse-bouche, crafted only for early bookings!</span>
            </li>
            <li class="flex items-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-white border border-amber-300 rounded-full mr-3">
                    <x-heroicon-o-sparkles class="w-5 h-5 text-yellow-500"/>
                </span>
                <span class="text-lg text-gray-800"><strong>Water</strong>: unlimited fresh water served directly at your table, included.</span>
            </li>
            <li class="flex items-center">
                <span class="inline-flex items-center justify-center w-8 h-8 bg-white border border-amber-300 rounded-full mr-3">
                    <x-heroicon-o-sparkles class="w-5 h-5 text-yellow-500"/>
                </span>
                    <span class="text-lg text-gray-800"><strong>Coffee Included</strong>: a complimentary coffee to round off your evening.</span>
            </li>
        </ul>
    </div>
</div>

<section class="my-12 -mx-4 sm:mx-0 max-w-2xl sm:max-w-none mx-auto rounded-2xl overflow-hidden border-2 border-rose-200 shadow-xl bg-gradient-to-b from-rose-50/95 via-white to-fuchsia-50/40 text-gray-800 leading-relaxed">
    <div class="relative">
        <div class="aspect-[21/9] sm:aspect-[2.4/1] max-h-52 sm:max-h-64 w-full overflow-hidden">
            <img src="{{ image('cocktails-color.png') }}" alt="Alba Bar cocktails" class="w-full h-full object-cover object-center scale-105 sm:scale-100" width="1200" height="514" decoding="async">
            <div class="absolute inset-0 bg-gradient-to-t from-rose-950/85 via-rose-900/35 to-fuchsia-900/20"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-rose-950/40 via-transparent to-fuchsia-950/30"></div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 px-4 pb-5 pt-14 text-center">
            <p class="text-rose-200/95 text-xs font-semibold uppercase tracking-[0.35em] mb-1">Alba Bar</p>
            <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl font-bold text-white drop-shadow-md tracking-tight">
                What about the cocktails?
            </h2>
        </div>
    </div>

    <div class="px-4 sm:px-6 py-8 space-y-6">
        <div class="text-center text-neutral-700 max-w-xl mx-auto space-y-3">
            <span class="inline-block rounded-lg bg-rose-100 text-rose-950 px-3 py-1.5 text-sm font-semibold">Not included in the tasting price</span>
            <p class="text-base sm:text-lg">You’ll get a <strong>cocktail menu</strong> on the night and order what you’d like to try.</p>
        </div>

        <div class="rounded-xl border border-rose-100 bg-white/90 shadow-sm px-5 py-5 space-y-4">
            <p class="text-neutral-800 text-center sm:text-left">
                This evening is a <strong>tasting experience</strong>, not a night for heavy drinking. Drinks are meant to <strong>harmonize with the pizza</strong>: light, balanced, and uplifting without stealing the show.
            </p>
            <div class="grid sm:grid-cols-2 gap-3 pt-2 border-t border-rose-100">
                <div class="rounded-lg bg-gradient-to-br from-rose-50 to-white border border-rose-100/80 px-4 py-3">
                    <p class="text-sm font-semibold text-rose-900 mb-1">Taster-sized</p>
                    <p class="text-sm text-neutral-600">Pick what appeals, try new flavours, and skip full pours until you know your favourites.</p>
                </div>
                <div class="rounded-lg bg-gradient-to-br from-fuchsia-50/80 to-white border border-fuchsia-100/80 px-4 py-3">
                    <p class="text-sm font-semibold text-fuchsia-950 mb-1">At your table</p>
                    <p class="text-sm text-neutral-600">Order with the team and settle drinks at checkout.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="my-12 max-w-2xl mx-auto rounded-2xl border-2 border-amber-300 bg-gradient-to-br from-amber-50 via-white to-lime-50/40 shadow-lg px-6 py-8 sm:px-8 text-gray-800" id="booking">
    <h2 class="font-serif text-2xl sm:text-3xl font-semibold text-center text-neutral-900 mb-4">How much does it cost?</h2>
    <p class="text-center text-neutral-700 max-w-lg mx-auto mb-6 leading-relaxed">
        This price is <strong>only</strong> for you joining me on this next trip. To <strong>reserve your seat</strong>, send me the money via <strong>Twint</strong>—once I’ve received it, your place is confirmed.
    </p>
    <p class="text-center text-neutral-600 mb-2">That covers your tasting, water, and the booking bonuses for this night:</p>
    <p class="text-center mb-4">
        <span class="font-serif text-4xl text-red-900/80 line-through">59.</span>
        <span class="font-serif text-5xl sm:text-6xl text-green-800 font-bold">50.-</span>
        <span class="block text-sm text-neutral-500 mt-1">CHF</span>
    </p>

    <div class="mt-8 pt-6 border-t border-amber-200/90 space-y-4 text-center max-w-lg mx-auto" >
        <h3 class="font-serif text-xl font-semibold text-neutral-900">How to book</h3>
        <p class="text-neutral-700 leading-relaxed">
            Send me the money via <strong>Twint</strong>.
        </p>
        <p class="text-neutral-700">
            Then send me a WhatsApp—<a href="https://api.whatsapp.com/send?phone=41787131882&text=Hi!%0AI%20would%20like%20to%20join%20the%20Alba%20Tasting" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-full bg-[#25D366] text-white px-5 py-2.5 text-sm font-semibold shadow-md hover:bg-[#20bd5a] transition" aria-label="Open WhatsApp to message about joining Alba">click here</a>
        </p>
    </div>

    <p class="text-center text-sm text-neutral-600 mt-6">Valid until Sunday evening 29th of March at 20:00.</p>
</div>

<hr>

<h2 class="my-6 font-serif text-2xl font-semibold text-center">The Restaurant</h2>
<div class="mt-8 space-y-5 text-lg leading-relaxed">
    <p>
        Most pizzerias use commercial yeast to "force" dough to rise in a few hours.
    </p>
    <p>The result? For how good the toppings may be, the base taste all the same</p>

    <h2 class="text-2xl font-bold italic">Meet Aulus: The 160-Year-Old Powerhouse</h2>
    <p>
        The "secret" to Alba artisanal sourdough isn't a pizzaiolo, but is a living legend.
    </p>
    <p>
    The levain, called <strong>Aulus</strong>, was born in Iceland and raised in Switzerland.
    </p>
    <p>
    He is 160 years old and is fed every single day with Tumminia ancient grain flour.
    </p>

    <p>
        <strong>Aulus creates a flavor profile and texture that "fast pizza" simply cannot replicate.</strong><br>
        This is another neapolitan pizza, but a <strong>centuries-old tradition</strong> baked on a plate.
   </p>

    <p>
        They don't settle for supermarket toppings.         </p>

    <p>We import the majority of our products directly from small-scale producers who care as much as we do.</p>

    <ul class="list-disc pl-6 space-y-2 font-medium">
        <li><strong>House-Made Raw-Milk Mozzarella:</strong> Crafted in-house for unparalleled freshness.</li>
        <li><strong>Sicilian Liquid Gold:</strong> Olive oil and tomato passata sourced directly from Del Grillo in Sicily.</li>
        <li><strong>Ancient Grains:</strong> Milled right here on Swiss fields.</li>
    </ul>

<div class="max-w-sm border-amber-500 border rounded px-4 py-2 shadow-md mx-auto flex">
    <a href=https://maps.app.goo.gl/6GtAPzGvFoXpuL2eA">
        <img src="https://cdn.prod.website-files.com/65f15b1071255e3999b38f40/67561892dea16fa34c071290_Logo_Alba_Farbig.svg"
        alt="Alba" class="w-32 h-32 mr-4">
    </a>
    <div>
        <h3 class="font-bold text-serif text-2xl lg:text-3xl">Alba</h3>
        <p class="italic">Bremgartnerstrasse 70, 8003 Zürich</p>
        <p>4.7 <small>⭐⭐⭐⭐⭐</small> (754)</p>
    </div>

</div>


</div>
<hr class="my-2">

<h3 class="block mt-12 text-xl font-semibold">The Fine Print Just to Be Totally Clear</h3>
<ul class="pt-2 mb-4 space-y-4 list-inside">
<ul class="space-y-2 text-sm leading-relaxed">
<li>All prices are in Swiss Francs (CHF) and include relevant taxes.</li>
<li>The menu cannot be changed or modified. You may order additional dishes at your own expense.</li>
<li>Seats are assigned on a first-come, first-served basis and may sell out before the deadline.</li>
<li>The ticket is fully refundable until:</li>
<li class="font-semibold text-center">Tuesday, 2 April 2026 — 13:00 (Zurich time)</li>
<li>After this deadline, no refunds will be issued. All sales are final.</li>
<li>If a waitlist is available, your spot may be reassigned with a CHF 5.– processing fee.</li>
<li>Participation is not personal. If you cannot attend, you may transfer your ticket to another person (you are responsible for finding the replacement).</li>
<li>
To cancel, contact me by phone at
<a href="tel:+41787131882" class="font-semibold underline ">+41 78 713 1882</a>
or by email at
<a href="mailto:marco.azzari@foodexplorers.ch" class="font-semibold underline hover:text-blue-700">marco.azzari@foodexplorers.ch</a>.
The timestamp of your message will be used as the reference time.
</li>
<li class="font-semibold text-red-600">
Changing your RSVP on Meetup will <u>not</u> be considered, as I don’t receive notifications. Please contact me directly.
</li>
<li>In case the dinner is canceled from my side, a full (100%) refund will be issued.</li>
</ul>

</ul>
</article>

@endsection
