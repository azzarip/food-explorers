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
    <div class="bg-black w-full max-lg:min-h-screen text-white text-center py-4">

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
        <div class="max-w-2xl mx-auto space-y-3 pt-4 max-lg:px-2">
            @if(false)
            <p class="font-serif  text-xl lg:text-2xl font-semibold">Dear Food Explorer,</p>
            <h2 class="font-serif text-2xl lg:text-3xl font-semibold text-center">We are going to MILANO!</h2>
            <p>I said for end of January, but here I am...</p>
            <p>If you are reading this, it means you have been waiting patiently for it.</p>
            <p>And now it is finally here...</p>
            <p>We are going to Milano for a weekend of incredible food, amazing drinks and unforgettable memories.</p>
            <p>So let's do it properly...</p>
            <p>Because this page contains <strong>everything you need</strong> if you’re thinking about joining me in Milano.</p>
            <p>Please read it carefully, especially if it is the first time joining one of my trips.</p>
            <p>If you prefer you can watch the video, wording may differ a bit, but the content is the same.</p>
            <p>But before I show you what I'm planning, I need to explain what Milano really is...</p>

            <h2 class="font-serif text-2xl lg:text-3xl font-semibold">Milano is not a city for Foodies</h2>
            <p class="italic text-xl">Wait... let me explain...</p>
            <p>Milano is often described as a city where you “eat well.”</p>
            <p>            That description is accurate  and <strong>but completely misleading</strong>.            </p>
            <p>Yes, you can dine nicely here.</p>
            <p>Yes, you can leave satisfied.</p>
            <p>But most visitors spend years coming to Milano and never experience what actually makes it special.</p>
            <p>They collect pleasant meals, not <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">defining</span> ones.</p>
            <p>Because Milano is not built to impress you.</p>
            <p>It is built to <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">filter you out</span>.</p>
            <p>In most cities, curiosity is enough to have amazing dinners.</p>
            <p>Look for traditional places, follow Google Maps or Tripadvisor.</p>
            <p>In Milano, that logic quietly fails.</p>
            <p>The doors that matter do not open because you searched harder.</p>
            <p>This is why Milano feels cold to so many people.</p>
            <p>Not because it lacks warmth, but because it refuses to show for you.</p>

            <h2 class="font-serif text-2xl lg:text-3xl font-semibold text-center py-4">Most food lovers visit Milano and still never touch what actually makes it special</h2>

            <p>They eat well.</p>
            <p>They take pictures.</p>
            <p>They tell their friends they love Italian food.</p>
            <p>And yet—the experience never quite lands.</p>
            <p>This is not because Milano lacks great food.</p>
            <p class="font-semibold">This is because Milano does not reward curiosity.</p>
            <p>It’s because Milano rewards <strong>belonging</strong>.</p>
            <p>From the outside, Milano looks like fashion, finance, and shows.</p>
            <p>From the inside, it reveals some of the most focused and uncompromising chefs in Italy.</p>
            <p>Places you don’t find easily on the internet.</p>
            <p>Places you are <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">invited into</span>.</p>
            <p>And this weekend,</p>
            <h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-2">I will be the one opening the door.</h2>
<p>In most cities, choosing well is enough.</p>
<p>In Milano, it isn’t.</p>
<p>What separates an ordinary meal from a defining one here is rarely the menu.</p>
<p>It’s the way they receive you.</p>
<p>The <strong class="text-blue-900">suggestions</strong> that appear without being requested.</p>
<p>The <strong class="text-cyan-800">dishes</strong> dishes that never make it onto the printed menu.</p>
<p>The <strong class="text-red-900">wine</strong> that is perfectly paired knowing where the meal is going.</p>
<p>These things do not happen because you chose wisely, but because someone decided to <strong>take care of you</strong>.</p>
<p>Milano changes the moment you stop entering it as a tourist trying to prove something.</p>
<p>And that is the shift this weekend creates.</p>
<p>When you arrive as part of a <strong>circle</strong>, everyone relaxes.</p>
<p>Not because you asked, but because you were expected.</p>
<p>That single difference changes everything. </p>
<p>It changes how chefs receive you.</p>
<p>It changes what is suggested instead of explained.</p>
<p>It changes the pace, the tone, the confidence at the table.</p>
<p>You are no longer treated as another visitor passing through, just looking for Pizza and Pasta.</p>
<p>You are received as someone who <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">belongs there</span>.</p>
                <h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-4">What I Actually Bring You Into</h2>
<p class="font-semibold">For one weekend, you borrow my access.</p>
<p>Not my recommendations. Not my “favorite spots.”</p>
<p>My way of moving through this city.</p>
<p>Because in Milano, trust is everything.</p>
<p>Restaurants show different sides for people who know better.</p>
<p>If you just go there by yourself, you will always get the <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">daily tourist treatment</span>.</p>

<p>And when that happens, Milano <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">doesn’t perform</span>.</p>

<p>This is not something you can reproduce later.</p>

<p>You can come back to Milano a hundred times and still never experience another version of it.</p>

<p>Because it only exists under very specific conditions.</p>

<p>It requires the right people at the table.</p>

<p>And it requires someone willing to <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">put their name behind you</span>.</p>

<p class="font-semibold">It requires me.</p>


<h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-4">What Changes in a Weekend Like This</h2>
            <p>Something subtle happens when you move through Milano this way.</p>

<p>The mental noise disappears.</p>
            <p>You stop spending the whole day looking on Google for where to dine.</p>

            <p>You stop second-guessing your choices. Oh, no is this the best restaurant?</p>

            <p>You stop wondering whether something better is happening somewhere else.</p>

            <p>You’re not optimizing anymore.</p>

            <p>You’re <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">experiencing</span>.</p>

            <p>You taste things you wouldn’t have ordered alone.</p>

            <p>Dishes make sense without explanation.</p>

            <p>Wine feels clearer because it’s right and perfectly paired.</p>

            <p>You share tables with people who notice the same details you do.</p>

            <p>And without realizing it, your standards shift.</p>

            <p>After that, scrolling through other people’s trips feels distant.</p>

            <p>And there is when you realize that this wasn’t just a weekend away.</p>

            <p>It became a <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">reference point</span> for the next table, the next bottle, the next trip you choose.</p>

            <h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-4">The Milano Food Myth</h2>
            <p>There is a quiet assumption most people arrive with.</p>

            <p>Because Milano is in Italy, they expect Pizza and Pasta.</p>

            <p>Because it sits near the Alps, they expect heavy food.</p>

            <p>Because it is a fashion city, they expect small and extremely expensive portions.</p>

            <p>Milano does have traditions:</p>
            <p>Risotto. Cotoletta. Polenta. Braised dishes built for colder climates.</p>

            <p class="font-semibold">But tradition is not what defines Milano’s food scene today.</p>

            <h2 class="font-serif text-2xl lg:text-3xl text-center font-semibold pt-4">Milano is not where Italian food comes from, </h2>
            <h2 class="font-serif text-2xl lg:text-3xl text-center font-semibold pt-4">It is where it comes together.</h2>

            <p>What shapes this city is not nostalgia for the past times.</p>

            <p>Chefs come here because this is where standards are the highest.</p>

            <p>Where consistency matters more than storytelling.</p>

            <p>Where diners eat well every week, not once a year.</p>

            <h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-4">The Real Secret of Milano</h2>
            <p>The real heartbeat of Milano’s food culture doesn’t begin at dinner.</p>

            <p>This is the part that surprises almost everyone.</p>

            <p>It begins early in the morning.</p>

            <p>Long before menus are printed or tables are set.</p>

            <p>That’s when the <strong>fish</strong> arrives.</p>

            <p class="italic">Not symbolically. Physically.</p>

            <p>It's not some poetic methapor. I mean it.</p>

            <p>Just outside the city, Milano hosts the <strong>largest fish market in Italy</strong>.</p>

            <p>Seafood flows through Milano before it is judged, sorted, and distributed across the country.</p>

            <p>And over time, that shapes taste.</p>

            <p>Milano is where fish is evaluated under the highest standards.</p>

            <p>There is no tradition to live up to.</p>

            <p>Only contemporary food culture to create.</p>

            <p>That’s why seafood in Milano feels different.</p>

            <p>Not louder. Not more emotional.</p>

            <p><span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">Sharper. Cleaner. Exact.</span></p>

            <p>When I say this, even Italians look at me in disbelief.</p>

            <p class="italic">“Fish? In Milano?”</p>

            <p>Yes. Fish in Milano.</p>

            <p>And once you understand this, an entire side of the city suddenly makes sense.</p>

            <h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-4">Why Tourists Never See This Side of Milano</h2>
            <p>The restaurants that handle fish seriously here do not announce themselves.</p>

            <p>They are not framed as experiences.</p>

            <p>They cook for people who already know why they came.</p>

            <p>Visitors mistake this understatement for absence.</p>

            <p>They don’t realize they’re sitting in one of Italy’s most demanding seafood cities — because nothing points them toward it.</p>

            <p>These are not restaurants you “find.”</p>

            <p>They are restaurants you are <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">brought into</span>.</p>


            <h2 class="font-serif text-2xl lg:text-3xl font-semibold pt-4">The Real Secret of Marvelous Milano</h2>

            <p>You can come to Milano anytime.</p>

            <p>You can book trains.</p>
            <p>Reserve tables.</p>
            <p>Walk the same streets.</p>

            <p>You can eat well.</p>

            <p>Most people do.</p>

            <p>But if y ou want to experience this city in all its shades....</p>

            <p>It requires the right people at the table.</p>
            <p>And it requires someone willing to <span class="bg-amber-100 text-amber-900 rounded px-1 font-medium">put their name behind you</span>.</p>

            <p class="font-semibold">It requires me.</p>

            <p class="font-semibold text-xl lg:text-2xl text-center">This is why Marvelous Milano exists.</p>

            @endif

            <div class="max-w-2xl mx-auto my-12 p-8 bg-white border border-gray-100 shadow-xl rounded-2xl text-center"
            x-data="countdownTimer('2026-02-01T18:00:00Z')"
            x-init="init()">

           <h2 class="text-2xl lg:text-3xl font-trajan uppercase tracking-widest text-gold-600 font-semibold mb-2">Marvelous Milano</h2>
           <p class="text-2xl lg:text-3xl font-serif text-gray-900 mb-6">Experience the Foodie Excellence of Milan</p>

           <div class="space-y-4 mb-8" x-show="!isExpired">
               <p class="text-lg text-gray-600">
                   Bookings open on <span class="font-bold text-gray-900">01/02/2026 at 19:00</span>
               </p>
               <div class="inline-block px-4 py-1 rounded-full bg-red-50 text-red-700 text-sm font-medium uppercase tracking-tight">
                   First-come, first-served
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
           <div x-show="isExpired" class="mb-10">
               <p class="text-2xl font-bold text-green-600">Bookings are now OPEN!</p>

               <x-forms::base button="Unlock this weekend in Milano" class="text-left">

               <x-forms::field.first_name />
               <x-forms::field.last_name />
               <x-forms::field.email />
               <x-forms::field.phone />
               <x-forms::field.privacy_policy />
               </x-forms::base>

               {{-- Hi there! --}}
           </div>




       </div>
       <h2 class="font-serif text-2xl lg:text-3xl font-semibold">What will happen here?</h2>
       <p>At the end of the countdown, a form will appear.</p>
       <p>The first to fill the form, will be the first to be contacted by me.</p>
       <p>We will need <strong>10 minutes together</strong> and I will tailor the Marvelous Milano offer to your needs and preferences.</p>
       <p>In case you are not available, we can schedule a call at a later time.</p>
       <p>Your queue position will not be affected.</p>
       <p class="font-semibold">Filling this form will not commit you to anything.</p>
       <p class="font-semibold text-xl text-right">Marco</p>


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
