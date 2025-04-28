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
            <p class="mt-2 text-xl font-semibold text-center font-head lg:text-2xl">This is my <span class="text-red-800">SPECIAL
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

            <div class="max-w-sm mx-auto text-center">
                <p class="font-head font-semibold mt-4"> 📌 Where?</p>
                <p class="text-center  text-xl lg:text-2xl">Paris, France 🇫🇷</p>
            </div>

            <div class="mt-6 w-4/5 lg:w-full max-w-2xl mx-auto">
                <x-button link="#offer">Join the Waitlist </x-button>
            </div>
        </div>
        <div class="mt-12 space-y-4" id="intro">
            <p class="font-serif text-3xl font-semibold mt-4">Dear Food Explorer,</p>

            <p>If you are reading these words, it means you care and like the events I have been organizing in the past
                years.</p>
            <p class="font-semibold">I am organizing a special weekend in <strong>the most famous European
                    Capital for Food</strong>, from Friday to Sunday, in October.</p>
            <p>The exact date will be decided soon.</p>
            <p>Each day we will try different things, visit restaurants and bars, while in the mean time we will explore
                the city and its hidden gems.</p>
            <p>It will be my greatest care in <span class="bg-amber-300/50">organizing the most delightful holiday a
                    foodie like you can aspire for</span>.</p>
        


        <h2 class="pt-6 font-trajan text-3xl lg:text-4xl font-semibold text-center" id="plan">The Plan</h2>
        <p>In this weekend, <strong>we will explore different restaurant of Paris</strong>, each carefully selected to
            showcase the heart and soul of Parisian cuisine.</p>
        <p>Along the way, we’ll also visit some special food stops that will surprise and delight you, from hidden
            patisseries to secret boulangeries filled with local treasures.</p>
        <p>We will arrive on Friday around 12:00, we put down our luggages in the hotel and we head to the first
            restaurant.</p>
        <p><strong>Your only responability is</strong> to come to Paris on Friday on time. From when you reach the
            Hotel, I will be there taking care of you.</p>
        <p>I have designed each day around its own theme, creating a journey that
            not only highlights the diversity of Parisian dining but also helps
            us navigate and fully immerse ourselves in this <strong> french culinary
                adventure together</strong>.</p>
        <p>I’ve chosen to organize our three days around three distinct themes, which are:</p>
        <ul class="text-2xl font-semibold list-disc list-inside font-head">
            <li>Day 1: <span class="text-red-700">Paris Tradition</span><br>
                <p class="font-normal text-lg my-2">Step back in time as we take you to one of most iconic bistrot,
                    where
                    classic French flavors reign supreme.</p>
            </li>
            <li>Day 2: <span class="text-cyan-800">Neo-Paris</span> <br>
                <p class="font-normal text-lg my-2">Experience the new wave of Parisian cuisine, where bold chefs
                    reinvent tradition with a touch of modernity</p>

            </li>
            <li>Day 3: <span class="text-pink-700">Hidden Gem</span><br>
                <p class="font-normal text-lg my-2">On Sunday something special awaits for you: a Bistrot? Maybe… I will
                    bring you to a restaurant known only to locals, where the chef, a oneof-a-kind person, will lead us
                    through unmarked territory…</p>
                <p>It's not Paris trip without <strong>fine dining</strong>.</p>
            </li>
        </ul>
        </div>

        <h2 class="h2 ml-2">What will be included</h2>
        <div class="px-4 rounded-lg">
            <h2 class="mt-6 mb-2 font-serif text-2xl text-center">Hotel</h2>
            <p>To have the greatest experience in Paris we will sleep in one of the hotel of the city center.</p>
            <p>It will be a ⭐⭐⭐⭐ (4-star) Hotel, so I can assure you are well threated and well rested.</p>
            <p><strong>Each participant will have its own room. </strong> You will not share your private space with anyone else.</p>
        </div>

        <div class="px-4 rounded-lg">
            <h2 class="my-6 font-serif text-2xl text-center">Restaurants</h2>
            <p>Most of Parisian menus are made of three dishes: Entrée, Plat and Dessert. These three dishes are included.</p>
            <p>Dishes will be yours to choose from the Menu.</p>
        </div>

        <div class="px-4 rounded-lg">
            <h2 class="my-6 font-serif text-2xl text-center">Organization</h2>
            <p>I will take care of doing the bookings.</p>
            <p>Organizing the hotels, the program and restaurants.</p>
            <p class="font-semibold">You just have to come to Paris and enjoy your holiday! </p>
        </div>

        <h3 class="mt-6 text-2xl font-trajan text-red-900 font-semibold">NOT INCLUDED:</h3>

        <div class="px-4 rounded-lg">
            <h4 class="my-4 font-serif text-2xl text-center">Transportation</h4>
            <p>You will have to take care of the transportation from Zurich to Paris and back.</p>
            <p>My suggestion is the train, but also the plane is a viable option.</p>
            <p>In the city, you can move around by public transport or Uber/Taxi.</p>
        </div>

        <div class="px-4 rounded-lg">
            <h4 class="my-4 font-serif text-2xl text-center">Drinks</h4>
            <p>I will make a package with the hotel, the restaurants and some other food threats.</p>
            <p>I will leave the drinks out, to make it fairer for people who don't drink alcohol or drink just a bit.</p>
            <p>For the wine, we can share the bottles among who wants.</p>
        </div>

        <x-button link="#offer">Join the Waitlist</x-button>

        <h2 class="h2 mb-2">How does the booking work?</h2>
        <div class="space-y-3 lg:space-y-6 mt-2">

            <div class="border rounded-lg p-4 shadow">
                <a href="#offer">
                    <h3 class="font-head font-semibold text-2xl lg:text-3xl hover:no-underline underline text-blue-900 mb-2">1.
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
                <p>I will send out the full programm, dates and prices.</p>
                <p>You'll have a set time to decide if you want to join before the others gets the chance.</p>
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
            <p class="text-center text-xl">And be the first to have the opportunity to join this experience!</p>
            <p class="text-center text-xl">And enjoy a <span class="text-orange-900">dream weekend</span> in Paris, that is uniquely crafted for you as foodie to
                enjoy.</p>

            <div class="max-w-sm mx-auto">
            <x-forms::base action="/paris" button="Join the waitlist for Paris!">
                <x-forms::field.first_name />
                <x-forms::field.last_name />
                <x-forms::field.email />
                <x-forms::field.phone />
                <x-forms::field.privacy_policy />
            </x-forms::base>
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
            <p>We will have lunch later and dinner later than in Switzerland.</p>

            <p class="my-4">The plan in the details may change but overall this is the outline</p>
        </div>

        <div class="mt-6">
            <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">I have allergies or intollerances...</h3>
            <p>Before booking, I will ask any participant for allergies or intollerances.</p>
            <p>This information will be kept private and only shared with the restaurant.</p>
        </div>

        <div class="mt-6">
            <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">Are there vegetarian options?</h3>
            <p>As I complete the organization I can tell you better.</p>
            <p>Most of the restaurant I am in contact with offer vegetarian dishes.</p>
            <p>Complete the form and I will be back to you as soon as everything is ready.</p>
        </div>

        <div class="mt-6">
            <h3 class="mt-6 mb-4 font-serif text-2xl font-semiboldl">Any other question?</h3>
            <p>Contact me at <a href="mailto:marco.azzari@foodexplorers.ch">marco.azzari@foodexplorers.ch</a>.</p>
            <p>I will be happy to reply.</p>
        </div>
    </article>
@endsection
