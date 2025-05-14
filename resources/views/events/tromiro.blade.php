@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Pizza Tasting - Food Explorers',
        description: 'Exploring Malaysia is a Malay Tasting Dinner at the Restaurant A Fatt in on the 5. March 2025. Places are limited, book now.',
        image: image('explore-malaysia.webp'),
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
    <p class="mt-2 mb-4 text-2xl text-center font-trajan">A Taverna E Pullicinella</p>
    

    <img src="@image('explore-malaysia.webp')" alt="Explore Malaysia Banner" class="rounded-lg shadow-md">
    <p class="max-w-xl mx-auto mt-4 font-serif text-2xl font-semibold text-center lg:text-3xl">A <span class="text-amber-800">culinary journey</span>  through <span class="text-blue-950">Modern Neapolitan Pizzas</span> with <span class="font-semibold">Raffaele Tromiro</span></p>
    <p class="mt-2 mb-4 text-2xl text-center font-trajan">Thursday 29. May 2025, 19:00</p>
    <p class="italic text-center">Bäckerstrasse 36, 8004 Zürich</p>
    <div class="mt-4 space-y-4">
        <p>Close your eyes and imagine yourself wandering the cobbled streets of <strong>old Napoli</strong>.</p>
        <p>The air is alive with the <strong>wood-fired perfume of bubbling dough, roasted San Marzano tomatoes, and fresh basil</strong> picked just moments ago.</p>
        <p>Voices rise in song and laughter as locals gather around simple wooden tables, <strong>sharing slices and stories under the Mediterranean sky</strong>.</p>
        <p>On <strong>Thursday 29. March</strong>, for one night only, Zürich will become your gateway <strong>to Naples</strong> as we host a magical evening of pizza, passion, and southern Italian soul.</p>
    
        <p class="text-2xl text-center text-bold">A master pizzaiolo — one of the <strong class="text-amber-800">most awarded in Zurich</strong> — will bring the heart of Naples to life in front of your eyes.</p>
        <p>This is a <strong>one-time-only tasting experience</strong>, where every pizza tells a story of past and present of Napoli.</p>

        <p>The event will unfold in an intimate setting near Helvetiaplatz, transformed for one evening into a <strong>Neapolitan pizza dream</strong>.</p>

    
    <p>From the legendary <strong>Margherita D.O.P.</strong> to modern, new and imaginative creations rarely seen outside Italy, our tables will be filled with <strong class="text-amber-900">pizzas meant to be shared</strong>, fresh from the oven in true Italian fashion.</p>

    <p>You’ll taste and share: just as they do in Naples, where pizza isn’t just food, it’s a way of life.</p>

    <p>This is a <strong>communal, joyful</strong> style of dining that reflects the Neapolitan and Italian spirit, where food brings people together.</p>

    <p>We’ve worked closely with the pizzaiolo to create a <strong>curated menu</strong> that honors the <strong>purest traditions of Naples</strong>, using ingredients of the highest quality flown in specially for the event.</p>
    <p>He will also present some <strong>new and modern Pizzas</strong>, you do not see in other Pizzerias.</p>

        <p>Now, let’s take a closer look at what awaits you...</p>
    </div>
    
    <h2 class="my-6 font-serif text-2xl font-semibold text-center lg:text-3xl">Menu</h2>

    <ul class="pl-4 space-y-4">
        <li><strong class="lg:text-2xl">Margherita D.O.P. 👑</strong>  
            <br>This is the traditional Margherita from Napoli, made by Raffaele, with Pomodori del Piennolo and fresh Fiordilatte.</li>
            <div class="relative h-64 overflow-hidden lg:w-1/2 mx-auto rounded-lg">
                <img src="https://www.pullicinella.ch/wp-content/uploads/2024/11/IMG_3930-scaled.jpg" alt="Margherita"  class="absolute bottom-0 w-full">
        </div>
        <li><strong class="lg:text-2xl">Violetta</strong>  
            <br>A bold beauty in purple: silky sweet potato cream, mellow Fiordilatte, and the irresistible crunch of crispy pancetta</li>
        <li><strong class="lg:text-2xl">Blu di Bufala</strong>  
            <br>Creamy, tangy blue cheese made from buffalo milk, paired with smoky alpine Speck and toasted walnuts.</li>
        <li><strong class="lg:text-2xl">🎀 Il Segreto</strong>  
            <br>A creation still taking shape — one that we’re crafting with Raffaele just for this event. Revealed only on the night. Most probably vegetarian.</li>
        <li><strong class="lg:text-2xl">Mortadella e Pistacchi</strong>  
            <br>Thee classical crowd pleaser: everybody loves it. The savory freshly cut Mortadella accompanied by the bold pistacchio flavors.</li>
        <li><strong class="lg:text-2xl">Nerano</strong>  
            <br>Their signature creation: a velvety zucchini cream base, smoked mozzarella, crispy zucchini chips, and Speck to finish.</li>
    </ul>
   
   
    <h3 class="my-6 font-serif text-2xl">Dessert</h3>
    <p class="pl-4 mb-4">Dessert is not included, but the staff is available if you would like to order something sweet to finish your meal.</p>
    
    <div class="px-4 pb-4 mb-6 bg-blue-100 border-4 rounded-lg border-sky-700">
        <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
        <p><strong>This means also water</strong> or anything else not written above.</p>
        <p>You will order directly at the restaurant what you want to drink, and <strong>pay for it at the checkout</strong>.</p>
    </div>
    
    <div class="max-w-lg mx-auto">
        <x-button :link="durl('/pizza-tasting', 'book')" > Reserve now your seat! </x-button>
    </div>
    <p class="text-2xl font-semibold text-center">🔥 Limited Seats. One Night Only. 🔥</p>
    <p class="mt-4">Our last special dinner event sold out in less than 48 hours. This is your only chance to enjoy this exclusive menu at this special price.    </p>

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
        <img src="@image('raffaele.webp')" alt="Raffaele Tromiro" class="rounded-lg">

    <h2 class="mt-12 mb-4 font-serif text-2xl font-semibold">How is the dinner organized?</h2>
    <div class="mt-6 space-y-4">
        <p>Step into the <strong>warm, lively world of Neapolitan hospitality</strong>, where pizza isn’t just a dish, it’s a way to bring people together.</p>
        <p>This special evening follows the joyful tradition of <strong>“Giro Pizza”</strong> or "Tour of Pizzas": a parade of freshly baked pizzas will be served straight from the oven and placed in the center of the table, hot and whole — ready to be sliced, shared, and savored.</p>
        <p>No need to choose your favorite — <strong>we’ll bring them all</strong>. One after another, different styles and toppings will arrive, from time-honored classics to bold surprises, each telling a tale of Naples in every bite.</p>
        <p><strong>Grab a slice and enjoy the dinner</strong>.</p>

        <p>🥂 <strong>Thirsty?</strong> A curated selection of Italian drinks, wines, and soft beverages will be available for order at the restaurant and can be paid separately at checkout.</p>
    </div>
    <div class="mt-6 space-y-4">

        <div class="text-center">
            <p class="font-semibold font-trajan">Exclusive One-Night-Only Tasting</p>
            <p class="font-serif text-6xl text-green-900">42.-</p>
        </div>
        <p>That’s right—only 42 CHF for everything you’ve seen above!</p>
        <p class="text-2xl font-semibold text-center">The offer is valid until all seats are reserved!</p>
        <p class="text-center">🚀 Last few Spots available. Grab yours now!</p>
    </div>
 <hr class="my-2">
    <div class="space-y-4">
        <div class="max-w-lg mx-auto">
            <x-button :link="durl('/pizza-tasting', 'book')" > Book now your seat for <small>CHF</small> 42! </x-button>
        </div>
        <p>Join the greatest group of foodies and share one of the <strong>most amazing Pizza tasting</strong> in Zurich.</p>
        <p><span class="">Enjoy a delightful night, as a <strong>real food explorer</strong></span>, and taste different pizzas straight from the oven, by one of the best pizzaioli in town.</p>
        <p>Meet other foodies, meet new people, laugh, drink, eat, smile!</p>
    </div>

    <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold">FAQ</h2>
    
    <h3 class="block mt-4 text-xl font-semibold">Can the Pizzas be changed?</h3>
    <p>The menu is defined and we cannot change the dishes, nor adjust the prices.</p>
        
    <h3 class="block mt-4 text-xl font-semibold">What if I have an allergy?</h3>
    <p>Please let me know at <a href="mailto:marco.azzari@foodexplorers.ch" class="font-semibold">marco.azzari@foodexplorers.ch</a> if you have any allergies before booking the event.</p>
    <p>The dishes cannot be changed but we can inform you of any allergens.</p>
       

    <h3 class="block mt-4 text-xl font-semibold">What if I cannot come?</h3>
    <p>The <strong>deadline</strong> for cancellations and reimbursement is:</p>
    <p class="text-xl font-semibold text-center">Thursday 22 May 2025 at 13:00, Zurich Time</p>
    <p>To cancel, write me message via Whatsapp or at my email. I will twint you back the total amount or cancel the credit cart payment.</p>
    <p class="font-semibold">Changing the RSVP on Meetup will not be considered, since I do not get notified. Please write me.</p>
    <p>Any later from that date, no reimbursement will be issued, and the payment will be considered final.</p>
    <p>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have to find that person.)</p>
    <p>In case of cancellation of the event from our side, a full 100% reimbursement will be issued.</p>
    


    <div class="max-w-lg mx-auto">
        <x-button :link="durl('/pizza-tasting', 'book')" > Reserve now your seat! </x-button>
    </div>
    <div class="h-12"></div>
</article>

@endsection
