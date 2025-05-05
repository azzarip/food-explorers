@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Petit Paris - Food Explorers',
        description: 'Petit Paris. An Adventure through Parisian Bistrots. October 2025, Dates to be decided. Places are limited, book now.',
        image: image('petit-paris.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto px-2 mb-12">
        <div class="max-lg:px-2 mt-2">
            <p class="mt-2 text-xl font-semibold text-center font-head lg:text-2xl">This is my <span
                    class="text-red-800">SPECIAL
                    INVITE</span> to come with me and other <span class="font-trajan text-amber-800">Food Explorers</span> to
                <span class="text-blue-900">Paris</span>!
            </p>
            <img src="@image('petit-paris.webp')" alt="Petit Paris" class="rounded-lg shadow-md w-full lg:max-w-2xl mx-auto mt-2">
            <p class="mt-2 text-xl font-semibold text-center font-head  lg:text-2xl">For a weekend of <span
                    class="text-red-900">incredible Food</span>, amazing <span class="text-purple-800">drinks</span> and
                unforgettable memories</p>

            <p class="font-serif text-center mt-4 font-semibold text-amber-800 text-xl lg:text-2xl">Friday - Sunday October
                2025</p>
            <p class="font-serif text-center font-semibold text-xl lg:text-2xl">DATES TO BE DECIDED</p>

            <div class="text-center mt-2">
                <p>Golden croissants at sunrise, hidden bistros at dusk, and the kind of Paris you only discover with locals who live for food</p>
            </div>

            <div class="mt-6 w-4/5 lg:w-full max-w-2xl mx-auto">
                <x-button link="#offer">Join the Waitlist </x-button>
            </div>
        </div>
        <div class="mt-12 space-y-4" id="intro">
            <p class="font-serif text-3xl font-semibold mt-4">Dear Food Explorer,</p>

            <p>If you are reading these words, it means you care and like the events I have been organizing in the past
                years.</p>
            <p class="">I am preparing a special weekend in <strong>the most famous European
                    Capital for Food</strong>, from Friday to Sunday, in October.</p>
            <p>The exact date will be decided soon.</p>
            <p>Each day we will try different things, visit restaurants and bars, while in the mean time we will explore
                the city and its hidden gems.</p>
            <p><span class="bg-amber-300/50">It will be my greatest care in organizing the most delightful holiday a
                    foodie like you can aspire for</span>.</p>



            <h2 class="pt-6 font-serif text-3xl lg:text-4xl font-semibold text-center" id="plan">Why Paris?</h2>
            <p>Paris is more than just a city; it’s a <strong>culinary legend</strong>.</p>
            <p>And as an Italian who breathes good food, I can tell you: no place in Europe weaves history, passion, and
                flavor into everyday life quite like Paris.</p>
            <p>You may have been there, probably many times...</p>
            <p>But this time, you're invited to step behind the scenes into a Paris that <strong>only locals know</strong>.
            </p>
            <p>I want to make it really clear...</p>
            <p class="font-bold text-head text-2xl lg:text-3xl text-center">This is not "<span
                    class="text-blue-900">another</span>" food tour </p>
            <p><strong class="underline decoration-red-500">This is not</strong> a walking tour through Parisian street food.</p>
            <p><strong class="underline decoration-red-500">This is not</strong> a run-of-the-mill of "The Top 10 Restaurants of Paris" by Tripadvisor.</p>
            <p>It’s a <strong>deep dive</strong> into the real Parisian Cuisine, curated for those who crave authenticity,
                the real experience, and discovering the <strong>hidden gems</strong> of the city.</p>
            <p></p>
            <p class="font-bold font-head text-2xl lg:text-3xl text-center">For <span class="text-orange-900">3 days</span>
                you will taste the <span class="text-green-900">cuisine that defines Paris</span> </p>
            <p>We're talking about <strong>intimate places</strong> where Parisians gather, where every dish carries history, craftsmanship,
                and passion. </p>
            <p>Here is <strong>a sneakpeak</strong> of what is waiting for you: </p>

            <div class="bg-amber-200/50 rounded p-2">
                <h2 class="font-serif text-2xl lg:text-3xl text-center">3 Food Experiences You Can't Miss in Paris</h2>
            </div>

            <h3 class="font-semibold font-head text-2xl lg:text-3xl">1. ✨Fine Dining ✨</h3>
            <p>Paris holds the crown as the <strong>Michelin-starred capital of Europe</strong>, and its fine dining scene
                is nothing short of breathtaking.</p>
            <p>It is second only to Tokyo!</p>
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/e3/d1/28/maigre-confit-a-l-huile.jpg?w=1200&h=800&s=1" alt="Fine Dining Pictures" class="rounded shadow lg:w-1/2 mx-auto">
            <p>Fine dining isn’t just about elegance; it’s about crafting a once-in-a-lifetime experience: where taste,
                storytelling, and imagination come together.</p>
            <p>We’ll experience a restaurant that <span class="font-bold">left me speechless</span>, a
                place where the philosophy behind the food is as rich as the flavors on your plate.</p>


            <h3 class="font-semibold font-head text-2xl lg:text-3xl">2. The Desserts 🥐🍰</h3>
            <p>No journey to Paris would be really worthy without surrendering to the city's most tempting pleasure:
                <strong>desserts</strong>.</p>
            <p>In its <strong>boulangeries</strong> and <strong>patisseries</strong>; butter, sugar, and magic come together
                in creations that are almost too beautiful to eat, almost.</p>
            <img src="https://horecanews.it/wp-content/uploads/2019/09/dolci-bachour.jpg" alt="Paris Desserts" class="shadow rounded">
            <p>But this isn’t just about sugar and butter: it’s about passion, craft, and a legacy that has shaped the world’s view of pastry-making. </p>
            <p>You cannot skip dessert in Paris, it is <strong>morally wrong</strong> not to eat them.</p>
            <p>In Paris, desserts aren’t just sweet to finish the dinner, they are an integral part of the meal, a <strong>delightful experience</strong>, a moment of pure joy in every bite.
            </p>
            <img src="https://media.scoolinary.app/images/2023/07/294_Bachour_banner2.jpg" alt="Paris boulangerie" class="shadow rounded">
            <p>In the morning, we can visit the boulangeries (<em>bakeries</em> in english), to taste the freshly made croissants, and other creations.</p>
            

            <h3 class="font-semibold font-head text-2xl lg:text-3xl">3. The Bistrots 👨🏻‍🍳</h3>
            <p>In Paris, food is an experience that goes beyond the food, it’s woven into the city’s soul and culture.</p>
            <p>You’ll hear words like <em>haute cuisine</em>, <em>bistrots</em>, and <em>brasseries</em> everywhere, but
                here, they mean so much more.</p>
        
            <p>The <strong>bistrot</strong> in the last years have been becoming more and more important, from a gastronomical point of view.</p>
            <img src="@image('cozy_bistrot.webp')" alt="Cozy Bistrot Picture" class="rounded shadow">
            <p></p>
            <p>It’s where simple ingredients are transformed into dishes that taste like home and hospitality.</p>
            <p class="font-semibold">During our journey, we'll dine in bistrots, where you can feel the every day life Paris
                of around you.</p>



            <hr>
            <div class="max-w-sm mx-auto">
                <x-button link="#offer">Join the Waitlist</x-button>
            </div>
            <hr>

            <p>In just one weekend, you’ll uncover a hidden Paris—one <strong>few tourists ever truly experience</strong>.
            </p>
            <p>This isn’t about checking off landmarks or following guidebooks.</p>
            <p>This is about <strong>living Paris</strong>.</p>
            <p>Tasting its soul, connecting with fellow Food Explorers, and gathering moments that will stay with you
                forever!</p>

            <h2 class="pt-6 font-trajan text-3xl lg:text-4xl font-semibold text-center" id="plan">The Plan</h2>
            <p>In this weekend, <strong>we will explore different restaurant of Paris</strong>, each carefully selected to
                showcase the heart and soul of Parisian cuisine.</p>
            <p>Along the way, we’ll also visit some special food stops that will surprise and delight you, from
                <strong>hidden
                    patisseries</strong> to <strong>secret boulangeries</strong> filled with local treasures.</p>
            <p><span class="underline decoration-green-700">We will arrive on Friday</span> around 12:00, we put down our luggages in the hotel and we head to the first
                restaurant.</p>
            <p>Our adventure will end on Sunday afternoon, just in time to catch the train (or plane) back to Zurich.</p>
            <p>I will take care of the hotel, the restaurants and some other food threats.</p>
            <p><strong>Your only responability is</strong> to come to Paris on Friday on time. From when you reach the
                Hotel, I will be there taking care of you.</p>
            <p>It will feel really effortless, just <span class="underline decoration-amber-500">come, eat and enjoy</span>!</p>
        </div>

        <h2 class="h2 ml-2 mt-6">What will be included</h2>
        <div class="px-4 rounded-lg">
            <h2 class="mt-6 mb-2 font-serif text-2xl text-center">Hotel</h2>
            <p>To have the greatest experience in Paris we will sleep in one of the hotel of the city center.</p>
            <p>It will be a ⭐⭐⭐⭐ (4-star) Hotel, so I can assure you are well threated and well rested.</p>
            <p><strong>Each participant will have its own room. </strong> We do not put everyone in 6-bed room to save a
                couple of bucks.</p>
        </div>

        <div class="px-4 rounded-lg">
            <h2 class="mt-6 mb-2 font-serif text-2xl text-center">Restaurants</h2>
            <p>Most of Parisian menus are made of three dishes: Entrée, Plat and Dessert. These three dishes are included.
            </p>
            <p>In Fine Dining restaurants, you will have the full menu included.</p>
            <p>Dishes will be yours to choose from the Menu.</p>
        </div>

        <div class="px-4 rounded-lg">
            <h2 class="mt-6 mb-2 font-serif text-2xl text-center">Organization</h2>
            <p>I will take care of doing the bookings.</p>
            <p>Organizing the hotels, the program and restaurants.</p>
            <p class="font-semibold">You just have to come to Paris and enjoy your food! </p>
        </div>

        <h3 class="mt-6 text-2xl font-trajan text-red-900 font-semibold">NOT INCLUDED:</h3>

        <div class="px-4 rounded-lg space-y-1">
            <h4 class="mt-6 mb-2 font-serif text-2xl text-center">Transportation</h4>
            <p>You will have to take care of the transportation from Zurich to Paris and back.</p>
            <p>My suggestion is the train, but also the airplane is a viable option.</p>
            <p>In the city, you can move around by public transport or Uber/Taxi.</p>
        </div>

        <div class="px-4 rounded-lg space-y-1">
            <h4 class="mt-6 mb-2 font-serif text-2xl text-center">Drinks</h4>
            <p>Water will be included, since it will be shared among the participants.</p>
            <p>I will leave all the drinks out, to make it fairer for people who don't drink alcohol or drink just a bit.
            </p>
            <p>For the wine, we can share the bottles among who wants.</p>
        </div>

        <div class="py-4 max-w-md mx-auto">
            <x-button link="#offer">Join the Waitlist</x-button>
        </div>

        <h2 class="h2 mb-2">How does the booking work?</h2>
        <div class="space-y-3 lg:space-y-6 mt-2">

            <div class="border rounded-lg p-4 shadow">
                <a href="#offer">
                    <h3
                        class="font-head font-semibold text-2xl lg:text-3xl hover:no-underline underline text-blue-900 mb-2">
                        1.
                        Join the Waitlist</h3>
                </a>
                <p>Fill out the form to show your interest — you'll be the first to be contacted when booking opens!</p>
                <p><strong>Joining the waitlist is completely non-binding</strong>, you can opt out any time. </p>
            </div>
            <div class="border rounded-lg p-4 shadow">
                <h3 class="font-head font-semibold text-2xl lg:text-3xl mb-2"> 2. Stay in the Loop</h3>
                <p>As I prepare this exciting new adventure, I’ll keep you updated with emails and sneak peeks about the
                    trip.</p>
                <p>So you know what I am planning and how the trip will be in any aspect of the program.</p>
            </div>

            <div class="border rounded-lg p-4 shadow">
                <h3 class="font-head font-semibold text-2xl lg:text-3xl mb-2"> 3. Early Access to Booking </h3>
                <p>In about 2–3 weeks, I’ll send you the full program, with all the details: dates, experiences, and prices.
                </p>
                <p>Seats will be assigned on a first come, first serve basis.</p>
            </div>

            <div class="border rounded-lg p-4 shadow">
                <h3 class="font-head font-semibold text-2xl lg:text-3xl mb-2">Let's go to Paris </h3>
                <p>For who decides to join, our adventure starts here!</p>
                <p>The croissants, the bistrots and the amazing food of Paris are waiting for us!</p>
            </div>

            <div class="border rounded-lg p-4">
                <h3 class="font-head font-semibold text-xl lg:text-2xl text-center"><x-heroicon-s-shield-check
                        class="w-8 mb-1 h-8 inline text-amber-800" />
                    Peace of Mind Guarantee</h3>
                <p>You will never receive any invoice nor any request of payment, until you personally confirm "<em>I want
                        to come to Paris</em>".</p>
                <p>Joining the waitlist is risk-free and keeps you first in line.</p>
            </div>
        </div>

        <section id="offer" class="lg:border rounded-lg lg:shadow-lg mt-4 shadow-amber-800">
            <h2 class="h2 text-center" style="margin-top:0px">Join the waitlist</h2>
            <p class="text-center text-xl">Be the first to have the opportunity to join this experience!</p>
            <p class="text-center text-xl mt-2">And enjoy a <span class="text-orange-900">dream foodie weekend</span> in Paris.</p>

            <div class="max-w-sm mx-auto my-2">
                @guest
                    <x-forms::base action="/paris" button="Join the waitlist for Paris!">
                        <x-forms::field.first_name />
                        <x-forms::field.last_name />
                        <x-forms::field.email />
                        <x-forms::field.phone />
                        <x-forms::field.privacy_policy />
                    </x-forms::base>
                @else
                    <div class="rounded border-2 border-green-800 p-2 mb-2">
                        <x-forms::base action="/paris" button="I want to join the waitlist for Paris!" class="bg-none">
                            <p class="text-2xl pl-2">Hi <span class="font-semibold">{{ auth()->user()->first_name }}</span>,
                                (<span class="underline" x-data="" @click="$dispatch('logout')">not you?</span> )
                            </p>
                            <input type="hidden" name="first_name" value="{{ auth()->user()->first_name }}">
                            <input type="hidden" name="last_name" value="{{ auth()->user()->last_name }}">
                            <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                            <input type="hidden" name="phone" value="{{ auth()->user()->phone }}">
                            <input type="hidden" name="privacy_policy" value="on">
                        </x-forms::base>
                    </div>
                @endif

                </div>
            </section>

            <h2 class="h2 mt-8">FAQ</h2>

            <div class="mt-6">
                <h3 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h3>
                <p><strong>The final price is not yet decided.</strong> It will be comunicated in 2-3 weeks, as soon as I finish
                    organizing.</p>
                <p>You will have the hotel, all the restaurant included, and all the organization costs included.</p>
                <p>So you can simply relax and enjoy the city.</p>
            </div>

            <div class="mt-6">
                <h3 class="mt-6 mb-4 font-serif text-2xl font-semibold">Is the waitlist binding?</h3>
                <p><strong>Absolutely not.</strong> Filling the form in this page is just to show your interest. </p>
                <p>You can opt out any time.</p>
                <p>When the organization is complete you will receive the full program with the price.</p>
                <p>Up to you to accept it or not.</p>
            </div>

            <div class="mt-6">
                <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">Is there free time?</h3>
                <p>There will be a lot of free time for you to explore the city on your own.</p>
                <p>I outlined a plan for these days, but apart from lunch and dinners you have all the free time for yourself to
                    explore the city and visit what you like the most.</p>
                <p class="font-semibold">Do not worry, you are not stuck with me for 3 days straight.</p>
            </div>

            <div class="mt-6">
                <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">I have allergies or intollerances...</h3>
                <p>Before booking, I will ask any participant for allergies or intollerances.</p>
                <p>This information will be kept private and only shared with the restaurant staff.</p>
            </div>

            <div class="mt-6">
                <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">Are there vegetarian options?</h3>
                <p>As I complete the organization I can tell you better.</p>
                <p>Most of the restaurants I am in contact with offer vegetarian dishes.</p>
                <p>If you join the waitlist, you can maybe tell me by message or email, so I know for sure.</p>
                <p>Anyhow I will ask during booking what are your dietary restrictions.</p>
            </div>

            <div class="mt-6">
                <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">Any other question?</h3>
                <p>Contact me at <a href="mailto:marco.azzari@foodexplorers.ch">marco.azzari@foodexplorers.ch</a>.</p>
                <p>I will be happy to reply.</p>
            </div>
            <p>Just a heads-up: the pictures are for illustration only, the actual dishes might be different, since menu and restaurant can change.</p>
        </article>
    @endsection
