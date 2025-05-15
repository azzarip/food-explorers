@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Pizza Tasting - Food Explorers',
        description: 'Explore Modern Neapolitan Pizza at A Taverna de Pullicinella, a pizza tasting tour to discover all the flavors of Italian Neapolitan Pizzas.',
        image: image('pizza-tasting.webp'),
    );
@endphp

@section('main')
    <div class="flex flex-row items-center justify-between -mt-4 lg:items-start">
        <div class="flex flex-row items-center justify-start w-fit">
            <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-fit lg:flex lg:items-center">
                <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="w-24 mx-auto">
                <span class="text-2xl text-center text-amber-800 lg:text-4xl font-trajan">Food Explorers</span>
            </div>
        </div>
        <div class="float-right mt-2 w-28 lg:mr-12">
            <img src="@image('tromiro.webp')" alt="Taverna di pullicinella Logo">
        </div>
    </div>
    <article class="max-w-2xl mx-auto">
        <h1 class="my-4 font-serif text-4xl font-bold text-center lg:text-5xl">Pizza Tasting</h1>
        <p class="mt-2  text-2xl text-center font-trajan">A Taverna E Pullicinella</p>
        <p class="italic text-center mb-4">Bäckerstrasse 36, 8004 Zürich</p>

        <img src="@image('pizza-tasting.webp')" alt="A Taverna" class="rounded-lg shadow-md">
        <p class="max-w-xl mx-auto mt-4 font-serif text-2xl font-semibold text-center lg:text-3xl">A <span
                class="text-amber-800">culinary journey</span> through <span class="text-blue-950">Modern Neapolitan
                Pizzas</span> with <span class="font-semibold">Raffaele Tromiro</span></p>
        <p class="mt-2 mb-4 text-2xl text-center font-trajan">Thursday 29. May 2025, 19:00</p>
        
        <div class="mt-4 space-y-4">
            <p>Close your eyes and imagine yourself wandering the cobbled streets of <strong>old Napoli</strong>.</p>
            <p>The air is alive with the <strong>wood-fired perfume of bubbling dough, roasted San Marzano tomatoes, and
                    fresh basil</strong> picked just moments ago.</p>
            <p>On <strong>Thursday 29. March</strong>, for one night only, Zürich will become your gateway <strong>to
                    Naples</strong> as we host a magical evening of pizza, passion, and southern Italian soul.</p>

            <p class="text-2xl text-center text-bold">A master pizzaiolo — one of the <strong class="text-amber-800">most
                    awarded in Zurich</strong> — will bring the heart of Naples to life in front of your eyes.</p>
            <p>This is a <strong>one-time-only tasting experience</strong>, where every pizza tells a story of past and
                present of Napoli.</p>

            <p>The event will unfold in an intimate setting near Helvetiaplatz, transformed for one evening into a
                <strong>Neapolitan pizza dream</strong>.</p>


            <p>From the legendary <strong>Margherita D.O.P.</strong> to modern, new and imaginative creations rarely seen
                outside Italy, our tables will be filled with <strong class="text-amber-900">pizzas meant to be
                    shared</strong>, fresh from the oven in true Italian fashion.</p>

            <p>You’ll taste and share: just as they do in Naples, where pizza isn’t just food, it’s a way of life.</p>

            <p>I’ve worked closely with the pizzaiolo to create a <strong>curated menu</strong> that honors the
                <strong>purest traditions of Naples</strong>, using ingredients of the highest quality flown in specially
                for the event.</p>

            <p>He will also present some <strong>new and modern Pizzas</strong>, you do not see in other Pizzerias.</p>

            <p>Now, let’s take a closer look at what awaits you...</p>
        </div>

        <h2 class="my-6 font-serif font-semibold text-center lg:text-4xl text-3xl">Menu</h2>

        <ul class="space-y-4">
            <li><strong class="lg:text-2xl">Margherita D.O.P. 👑</strong>
                <br>This is the traditional Margherita from Napoli, made by Raffaele, with Pomodori del Piennolo and fresh
                Fiordilatte.
            </li>
            <img src="https://www.50toppizza.it/wp-content/uploads/2022/05/Napule-Empoli-600x600.jpg" alt="Margherita" class="lg:w-1/2 mx-auto rounded-lg">
            <li><strong class="lg:text-2xl">Violetta</strong>
                <br>A bold beauty in purple: silky sweet potato cream, mellow Fiordilatte, and the irresistible crunch of
                crispy pancetta
            </li>
            <li><strong class="lg:text-2xl">Blu di Bufala</strong>
                <br>Creamy, tangy blue cheese made from buffalo milk, paired with smoky alpine Speck and toasted walnuts.
            </li>
            <li><strong class="lg:text-2xl">Il Segreto</strong>
                <br>A modern twist on a classic, we are working on this pizza and will be revealed on that day. .
            </li>
            <li><strong class="lg:text-2xl">Mortadella e Pistacchi</strong>
                <br>Thee classical crowd pleaser: everybody loves it. The savory freshly cut Mortadella accompanied by the
                bold pistacchio flavors.
            </li>
            <li><strong class="lg:text-2xl">Nerano</strong>
                <br>Their signature creation: a velvety zucchini cream base, smoked mozzarella, crispy zucchini chips, and
                Speck to finish.
            </li>
        </ul>
        <div class="mt-6 space-y-4">

            <div class="text-center">
                <p class="font-semibold font-trajan">Exclusive One-Night-Only Tasting</p>
                <p class="font-serif text-6xl text-green-900">42.-</p>
            </div>
            <p class="text-2xl font-semibold text-center">The offer is valid until all seats are reserved!</p>
        </div>

        <div class="max-w-lg mx-auto mb-4">
            <x-button :link="durl('/pizza-tasting', 'book')"> Reserve now your seat! </x-button>
        </div>
        <p class="text-center mb-4">🚀 Last few Spots available. Grab yours now!</p>


        <div class="px-4 pb-4 mb-6 bg-blue-100 border-4 rounded-lg border-sky-700">
            <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
            <p><strong>This means also water</strong> or anything else not written above.</p>
            <p>You will order directly at the restaurant what you want to drink, and <strong>pay for it at the
                    checkout</strong>.</p>
        </div>

        {{--     
    <h2 class="mt-12 mb-4 font-serif text-2xl font-semibold">Who are we?</h2>
    <div class="mt-6 space-y-4">
        <p>🌍 <strong>Welcome to Food Explorers!</strong> 🍽️</p>
        <p>We are a passionate community of food lovers, bringing together fellow foodies in Zurich and beyond to share unforgettable dining experiences.</p>
        <p>👋 My name is Marco, and I’m the chief organizer of this wonderful foodie community! </p>
        <p>Each week, we curate exciting events centered around great food and drinks, creating the perfect setting to connect with like-minded people.</p>
        <p>Our goal? To bring food lovers together and turn shared meals into lasting <strong>foodie friendships</strong>.</p>
        <p>🍷 From casual restaurant meetups to <strong>special dining experiences</strong> like this one at <strong>A Fatt</strong>, we explore the best culinary spots in town.</p>
        <p>Our community is growing fast, with more than <strong>1,600 members</strong> and counting! <a href="https://www.meetup.com/zurich-restaurant-explorers/" class="text-blue-800 underline" target="_blank" rel="noopener noreferrer">Join us on Meetup</a> and be part of the adventure!</p>
         --}}

        <h2 class="mt-12 mb-4 font-serif text-2xl font-semibold">Who is Raffaele Tromiro?</h2>
        <div class="mt-6 space-y-4">
            <img src="@image('raffaele.webp')" alt="Raffaele Tromiro" class="rounded-lg">
            <p>Raffaele Tromiro, a fourth-generation pizzaiolo from Naples, has masterfully <strong>brought the soul of
                    Neapolitan pizza</strong> to Switzerland.</p>
            <p>This passion lead him to <strong>open his first Napulé</strong> restaurant in Meilen, in 2015.</p>
            <p>Since then, his dedication to authentic pizza-making has earned him over 300 awards, including three "Pizza
                World Champion" titles in 2006, 2008, and 2012 </p>
            <p>He developed a <strong>unique flour blend</strong> in collaboration with a Mill from Thurgau, ensuring a
                light and fragrant dough that rests for 48 hours before baking.</p>
            <p>Ingredients like mozzarella and tomatoes are <strong>personally selected</strong> from his native Naples.</p>
            <p>His philosophy equates pizza-making to poetry, requiring "<em>passionate hands and absolute dedication</em>"
                to create the perfect pie.</p>
            <p>After his adventure in Meilen, he decided to open <strong>A Taverna e Pullicinella</strong> near Helvetiaplatz.
            </p>
            <p>Contrary to Napulé, that has more classical pizza, here Raffaele can express his creativity with new and
                modern pizzas.</p>
            <p>Just after 3 months of the opening, he was awarded with <strong>2 Spicchi Gambero Rosso</strong> as one of
                the Top Italian Restaurants in Zurich.</p>
            <img src="@image('taverna-rosso.webp')" alt="2 Spicchi Tromiro" class="lg:w-1/2 mx-auto rounded-lg">
        </div>

        <h2 class="mt-12 mb-4 font-serif text-2xl font-semibold">How is the dinner organized?</h2>
        <div class="mt-6 space-y-4">
            <p>Step into the <strong>warm, lively world of Neapolitan hospitality</strong>, where pizza isn’t just a dish,
                it’s a way to bring people together.</p>
            <p>This special evening follows the joyful tradition of <strong>“Giro Pizza”</strong> or "Tour of Pizzas": a
                parade of freshly baked pizzas will be served straight from the oven and placed in the center of the table,
                hot and whole — ready to be sliced, shared, and savored.</p>
            <p>No need to choose your favorite — <strong>we’ll bring them all</strong>. One after another, different styles
                and toppings will arrive, from time-honored classics to bold surprises, each telling a tale of Naples in
                every bite.</p>
            <p>🥂 <strong>Thirsty?</strong> A curated selection of Italian drinks, wines, and soft beverages will be
                available for order at the restaurant and can be paid separately at checkout.</p>
        </div>


        <hr class="my-2">
        <div class="space-y-4">
            <div class="max-w-lg mx-auto">
                <x-button :link="durl('/pizza-tasting', 'book')"> Book now your seat for <small>CHF</small> 42! </x-button>
            </div>
            <p>Join the greatest group of foodies and share one of the <strong>most amazing Pizza tasting</strong> in
                Zurich.</p>
            <p><span class="">Enjoy a delightful night, as a <strong>real food explorer</strong></span>, and taste
                different pizzas straight from the oven, by one of the best pizzaioli in town.</p>
            <p>Meet other foodies, meet new people, laugh, drink, eat, smile!</p>
        </div>

        <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold">FAQ</h2>

        <h3 class="block mt-4 text-xl font-semibold">Can the Pizzas be changed?</h3>
        <p>The menu is defined and we cannot change the dishes, nor adjust the prices.</p>

        <h3 class="block mt-4 text-xl font-semibold">What if I have an allergy?</h3>
        <p>Please let me know at <a href="mailto:marco.azzari@foodexplorers.ch"
                class="font-semibold">marco.azzari@foodexplorers.ch</a> if you have any allergies before booking the event.
        </p>
        <p>The dishes cannot be changed but we can inform you of any allergens.</p>


        <h3 class="block mt-4 text-xl font-semibold">What if I cannot come?</h3>
        <p>The <strong>deadline</strong> for cancellations and reimbursement is:</p>
        <p class="text-xl font-semibold text-center">Wednesday 21 May 2025 at 13:00, Zurich Time</p>
        <p>To cancel, write me message via Whatsapp or at my email. I will twint you back the total amount or cancel the
            credit cart payment.</p>
        <p class="font-semibold">Changing the RSVP on Meetup will not be considered, since I do not get notified. Please
            write me.</p>
        <p>Any later from that date, no reimbursement will be issued, and the payment will be considered final.</p>
        <p>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have
            to find that person.)</p>
        <p>In case of cancellation of the event from our side, a full 100% reimbursement will be issued.</p>



        <div class="max-w-lg mx-auto">
            <x-button :link="durl('/pizza-tasting', 'book')"> Reserve now your seat! </x-button>
        </div>
        <div class="h-12"></div>
    </article>
@endsection
