@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Marvelous Milano - Food Explorers',
        description: 'Milano Adventure 16-19. April 2026. Places are limited.',
        image: image('marvelous-milano.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('body')
    <div class="bg-black w-full pb-4 text-white text-center py-4">

        <h1 class="text-center text-3xl lg:text-4xl font-trajan text-amber-200 opacity-80">Marvelous Milano</h1>
        <p class="text-center text-xl lg:text-2xl my-1 lg:my-4 font-serif">The One Weekend in <span class="text-amber-200">Milano</span> that most <span class="text-red-200">food lovers</span> will never experience.</p>
        <div class="max-w-3xl mx-auto max-lg:px-2">
            <iframe
            width="100%"
            src="https://www.youtube.com/embed/H8eJRskis8E"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            style="aspect-ratio: 16 / 9; height: auto;"
            allowfullscreen>
        </iframe>
        </div>
        <p class="text-center text-slate-200">Watch the video!</p>

        @if(false)
        <div class="max-w-lg mx-auto my-4">
            <x-button link="#form">Jump to the booking form</x-button>
        </div>
        @endif
    </div>
    <article class="mb-8">
        <div class="max-w-2xl mx-auto space-y-3 pt-4 max-lg:px-2" id="form">

            <div class="max-w-2xl mx-auto my-12 p-8 bg-white border border-gray-100 shadow-xl rounded-2xl text-center"
            x-data="countdownTimer('2026-02-01T18:00:00Z')"
            x-init="init()">

           <h2 class="text-2xl lg:text-3xl font-trajan uppercase tracking-widest text-gold-600 font-semibold mb-2">Marvelous Milano</h2>
           <p class="text-2xl lg:text-3xl font-serif text-gray-900 mb-6">Experience the Foodie Excellence of Milan</p>

           <div class="space-y-4 mb-8" x-show="!isExpired">
               <p class="text-lg text-gray-600">
                   Bookings open on <span class="font-bold text-gray-900">01/02/2026 at 19:00</span>
               </p>
               <div x-show="isExpired" class="inline-block px-4 py-1 rounded-full bg-red-50 text-red-700 text-sm font-medium tracking-tight">
                   The form will appear here when the timer ends
               </div>
           </div>

           <div class="grid grid-cols-4 gap-4 mb-10" x-show="!isExpired">
               <template x-for="(value, label) in timeLeft" :key="label">
                   <div class="flex flex-col p-4 bg-gray-50 rounded-lg border border-gray-100">
                       <span class="text-3xl font-light text-gray-900" x-text="value"></span>
                       <span class="text-xs uppercase text-gray-400 tracking-wider" x-text="label"></span>
                   </div>
               </template>
           </div>

           <div class="pt-6 border-t border-gray-100" x-show="!isExpired">
            <p class="text-gray-500 italic">
                Just visit this page when the timer ends to secure your spot.
            </p>
        </div>
        <!-- This is the html you are looking for: :) -->
           <div x-show="isExpired" class="mb-10">
               <p class="text-2xl font-bold text-green-600">Bookings are now OPEN!</p>

               <x-forms::base button="Unlock this weekend in Milano" class="text-left">

               <x-forms::field.first_name />
               <x-forms::field.last_name />
               <x-forms::field.email />
               <x-forms::field.phone />
               <x-forms::field.privacy_policy />
               </x-forms::base>
               <p class="text-center text-slate-600 pt-2">Filling this form will not commit you to anything.</p>
           </div>




       </div>

<section class="bg-transparent text-zinc-900">
    <h2 class="text-2xl font-bold text-center font-trajan">Marvelous Milano</h2>
    <div class="mx-auto max-w-3xl px-6 py-14">

      <div class="rounded-3xl border border-zinc-200 bg-white/70 p-8 shadow-sm backdrop-blur">
        <!-- Header -->
        <div class="flex flex-col gap-6 sm:flex-row sm:items-start sm:justify-between">
          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-zinc-500">Marvelous Milano</p>
            <h2 class="mt-3 text-2xl font-medium leading-tight">
              April (16)-17–18-19
            </h2>
          </div>

        </div>

        <hr class="my-8 border-zinc-200" />

        <!-- Offer / Benefits -->
        <div class="grid gap-8 sm:grid-cols-2">
          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-zinc-500">What you get</p>
            <ul class="mt-4 space-y-3 text-sm leading-relaxed text-zinc-800">
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">✓</span>
                <span><span class="font-medium">Restaurants</span> handled: reservations + coordination + protection</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">✓</span>
                <span><span class="font-medium">Hotel</span> included: 1 private room per guest (one person per room)</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">✓</span>
                <span><span class="font-medium">Menus designed for us</span> with the chefs (no ordering stress)</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">✓</span>
                <span><span class="font-medium">Mornings & afternoons free</span> (shopping, museums, explore the city)</span>
              </li>
            </ul>
          </div>
          <div>
            <p class="mt-5">            <strong>Your only job</strong>: arrive in Milano on time.
            </p>
            <p>There are direct trains every hour and with a change in Lugano, every half an hour!</p>

          </div>
          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-zinc-500">How the experience feels</p>

            <div class="mt-4 space-y-4">
              <div class="rounded-2xl border border-zinc-200 bg-white/60 p-4">
                <p class="text-sm font-medium">The tables</p>
                <p class="mt-1 text-sm text-zinc-700">
                  Private tables — sometimes rooms — sometimes the whole place. Just for us!
                </p>
              </div>


            </div>
          </div>
        </div>

        <hr class="my-8 border-zinc-200" />

        <!-- Bonuses -->
        <div class="grid gap-8 sm:grid-cols-2">
          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-red-800">Bonus option</p>
            <div class="mt-4 rounded-2xl border border-zinc-200 bg-white/60 p-5">
              <div class="flex flex-wrap items-center gap-2">
                <p class="text-sm font-medium">April 16 — IYO Omakase</p>
                <span class="rounded-full border border-zinc-300 px-2.5 py-1 text-[11px] text-zinc-600">Only 6 people</span>
              </div>
              <p class="mt-2 text-sm text-zinc-700">
                Arrive one day earlier. Sit directly in front of the chef.
                Everything prepared right in front of you.
              </p>
            </div>
          </div>

          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-amber-900">Bonus (for everyone)</p>
            <div class="mt-4 rounded-2xl border border-zinc-200 bg-white/60 p-5">
              <p class="text-sm font-medium">Inner Circle access (starts immediately)</p>
              <p class="mt-2 text-sm text-zinc-700">
                Early meetup invites before anyone else.
                The weekend starts the moment you book.
              </p>
            </div>
          </div>
        </div>

        <hr class="my-8 border-zinc-200" />

        <!-- Risk reversal + Fit -->
        <div class="grid gap-8 sm:grid-cols-2">
          <div>
            <div class="mt-4 rounded-2xl border border-zinc-200 bg-white/60 p-5">
              <p class="font-medium text-amber-900">27-hour warranty</p>
              <p class="mt-2 text-sm text-zinc-700">
                Come. Sit. Experience it.
                If within 27 hours it’s not for you (and you mean it),
                you walk away with your money — even for the food you ate.
              </p>
            </div>
          </div>

          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-zinc-500">This is for you if</p>
            <ul class="mt-4 space-y-2 text-sm text-zinc-800">
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">1</span>
                <span>You love food (and you’re okay with fish being a meaningful part).</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">2</span>
                <span>You enjoy sharing a table with people like you.</span>
              </li>
              <li class="flex gap-3">
                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full border border-zinc-300 text-[11px] text-zinc-600">3</span>
                <span>You want modern Italian cuisine — not tourist checklists.</span>
              </li>
            </ul>
          </div>
        </div>

        <hr class="my-8 border-zinc-200" />

        <!-- CTA -->
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
          <div>
            <p class="text-sm font-medium">How to book</p>
            <p class="mt-1 text-sm text-zinc-700">
              Use <a href="#form" class="underline text-blue-900">this form</a>. The form decides the order.<br class="hidden sm:block">
              I’ll call you back to tailor (3 or 4 days, with/without wine).
            </p>
            <p class="mt-2 text-xs text-zinc-500">Please don’t write me via WhatsApp.</p>
          </div>

        </div>

        <p class="mt-6 text-xs text-zinc-500">
          <strong>Note</strong>: Once booked, it’s booked. Capacity tends to move fast after official release.
        </p>
      </div>

    </div>
  </section>


      <section class="py-16 px-4 max-w-5xl mx-auto">
        <div class="mb-12 text-center">
          <h2 class="text-3xl md:text-4xl font-bold text-black uppercase tracking-widest mb-4">FAQ</h2>
          <p class="text-black/60 italic text-lg">Details for the Marvelous Milano Experience.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">What’s included in this trip?</h3>
            <p class="text-black leading-relaxed">
              The basic offer includes your stay in a curated <strong>4-star hotel</strong>. At our restaurant stops, water and coffee are included. To give you full control over your experience, wine and premium beverages are billed separately.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">How much does it cost?</h3>
            <p class="text-black leading-relaxed">
              Precision matters. The price reflects your duration, booking window, and specific preferences. <span class="font-semibold underline">Complete the form</span>, and we will find the configuration that fits your needs.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">Guided tour or food tour?</h3>
            <p class="text-black leading-relaxed">
              Neither. This is not a scripted walk with lectures. I handle the logistics—hotel and restaurant reservations—while you enjoy the company. Between meals, the city is yours to explore as you wish.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">I’ve been to Milano before. Is this new?</h3>
            <p class="text-black leading-relaxed">
              The city is the same; the access is not. The atmosphere, the specific menus designed with chefs, and the community of high-level peers make this an entirely different reality from a standard visit.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">Why not plan this on my own?</h3>
            <p class="text-black leading-relaxed italic">
              "Planning gives you logistics. This weekend gives you access."
            </p>
            <p class="text-black mt-2 leading-relaxed">
              The difference is not just what you eat, but how you are received. You are sitting down as a guest of someone the house knows, not as a tourist with a reservation.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">Are the restaurants high-end?</h3>
            <p class="text-black leading-relaxed">
              We focus on <strong>serious</strong> restaurants. This isn't about collecting Michelin stars for the sake of it; it’s about quality, intention, and "right" choices over expensive ones. No excess, just precision.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">Can I have the restaurant list?</h3>
            <p class="text-black leading-relaxed">
              No. The experience is revealed day by day. This protects my intellectual property and prevents the journey from being reduced to a Google search. Rest assured, my guarantee ensures a premium standard.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">What if I don't drink alcohol?</h3>
            <p class="text-black leading-relaxed">
              You will feel perfectly at home. Wine is a cultural element of the trip, but never a requirement. Every table is curated to ensure everyone feels included and comfortable.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">How do I know if this is for me?</h3>
            <p class="text-black leading-relaxed">
              Marvelous Milano isn’t designed to convince you. It’s designed to feel obvious to the right person. If this resonates, we should talk and evaluate the fit together.
            </p>
          </div>

          <div>
            <h3 class="font-bold text-black mb-3 text-lg uppercase tracking-tight">How long do I have to decide?</h3>
            <p class="text-black leading-relaxed">
              Typically, 10–14 days. My meetups fill up quickly, and these curated spots are limited to maintain the quality of the group.
            </p>
          </div>

        </div>

        <div class="mt-16 pt-8 border-t border-black/10 text-center">
          <p class="text-black font-bold mb-4">Any other questions?</p>
          <x-button link="#form">Use this form and I will call you back</x-button>
        </div>
      </section>
        </div>


    </article>


@endsection


@push('scripts')
<script>
    function countdownTimer(targetDate) {
        return {
            target: new Date(targetDate).getTime(),
            timeLeft: { days: '00', hours: '00', minutes: '00', seconds: '00' },
            isExpired: false,

            init() {
                this.updateCounter();
                setInterval(() => this.updateCounter(), 1000);
            },

            updateCounter() {
                const now = new Date().getTime();
                const distance = this.target - now;

                if (distance < 0) {
                    this.isExpired = true;
                    return;
                }

                this.timeLeft.days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                this.timeLeft.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                this.timeLeft.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                this.timeLeft.seconds = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');
            }
        }
    }
    </script>
@endpush
