@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Omakase Menu',
        description: 'Omakase Menu at Yu-An on the 15. October 2024. Places are limited, book now.',
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
<div class="flex flex-row items-center justify-between lg:items-start">
<div class="flex flex-row items-center justify-start w-fit">
    <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-32">
        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="mx-auto">
    </div>
    <p class="font-serif text-2xl font-semibold lg:text-4xl">Food Explorers</p>
</div>
<div class="float-right w-32 m-6">
    <img src="https://static.wixstatic.com/media/82d2d6_4800dfcab3c74a20a267d944aeff8122~mv2.jpg/v1/fill/w_517,h_515,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/82d2d6_4800dfcab3c74a20a267d944aeff8122~mv2.jpg" alt="Yu An Logo" class="">
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="font-serif text-4xl font-semibold text-center">Omakase at Yu-An</h1>
    <p class="mt-2 text-xl text-center">Tuesday 15. October 2024, 19:00</p>

    <h2 class="my-6 font-serif text-2xl font-semibold">What is this dinner?</h2>

    <div class="space-y-4">
        <p><strong> Omakase お任せ</strong> is a Japanese term that means "<em>I leave it up to you</em>".</p>
        <p>It is a commonly used expression for a menu organized by the chefs of very famous restaurants.</p>
        <p>On <strong>Tuesday 15 October</strong>, the team of the restaurant of Yu An will welcome us on a splendid journey through the Nippon food.
            Sushi, hot and cold dishes, grilled japanese meat and sake for the bravest!</p>
        <p> <strong>Yu-An</strong>, near Stauffacher, is one of the best Japanese restaurant of Zurich with <strong>4.8 stars on Google Maps</strong> </p>
        <p>The restaurant style is called <strong>Izakaya</strong>, where various dishes are served together on the table to share with other people.</p>
        <p>This is the most popular form of gastronomy in Japan. <strong>It is a very social way to eat and you will have the chance to enjoy a great variety of dishes.</strong></p>
        <p>But let's explore the menu piece by piece:</p>
    </div>
    
    <h2 class="my-6 font-serif text-2xl font-semibold text-center">Menu</h2>

    <h3 class="my-6 font-serif text-2xl">Starters - 1. Round</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Edamame</strong>  
            <br>Steamed young soybeans, lightly salted, the typical japanese starter.</li>
        <li><strong>Coco-Infused Goma-ae Beans</strong>  
            <br>Blanched green beans in a velvety coconut-spinach sesame sauce.</li>
        <li><strong>Scallop Carpaccio</strong>  
            <br>Thinly sliced scallops, delicately seasoned with citrus and herbs.</li>
        <li><strong>Maguro Tataki</strong>  
            <br>Seared tuna with a light crust, drizzled in a yuzukoshô dressing.</li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">Signature Sushi - 2. Round</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Sushi Rolls</strong>
        <p>A selection of their signature rolls, we will taste Salmon (<em>Sake</em>), Tuna (<em>Maguro</em>) and Shirmps (<em>Ebi</em>)
             rolls in different variation. Their sushi is well known in the whole city. </p>
            <p>We will taste different style of rolls.</p>
        </li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">Hot Dishes - 3. Round</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Tori Karaage</strong>  
            <br>Crispy Japanese fried chicken bites, marinated in soy and ginger, served with garlic chili dip.</li>
        <li><strong>Kani Krokke</strong>  
            <br>Golden crab croquettes with a creamy filling, lightly fried.</li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">The Mains - 4. Round</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Grilled Yakiniku</strong>  
            <br>Succulent grilled beef (Ribeye CH) slices, marinated in a savory soy-based sauce, served with vegetables</li>
        <li><strong>Miso-Glazed Nasu Dengaku (Vegi)</strong>  
            <br>Grilled eggplant with a rich miso glaze, a perfect blend of sweet and savory.</li>
        <li><strong>Buta no Kakuni</strong>  
            <br>Tender, slow-braised pork belly, served in a flavorful soy garnish.</li>
        <li><strong>Steamed Rice (if requested)</strong>  
            <br>Light and fluffy, served to accompany your meal just the way you like it.</li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">Dessert - 5. Round</h3>
    <p class="pl-4 mb-4">Dessert is not included, but the staff is available if you would like to order something sweet to finish your meal.</p>


    
    <div class="px-4 pb-4 bg-blue-100 border-4 rounded-lg border-sky-700">
        <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
        <p><strong>This means also water</strong> or anything else not written above.</p>
        <p>You will order directly at the restaurant what you want to drink, and pay for it at the checkout.</p>
    </div>
    <hr>

    <div class="mt-6 space-y-4">
        <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h2>
        <p>If you go to the restaurant with 4 people to taste all of the previously shown menu you will pay almost 400.- Francs in Total.</p>
        <p>You will have this menu, only for that night at:</p>
        <p class="text-center">
            <span class="font-serif text-4xl text-red-900 line-through">97.</span>
            <span class="font-serif text-6xl text-green-900">74.-</span>
        </p>
        <p>74.- Francs per person, for all that magic you have seen above!</p>
        <p>The offer is valid until:</p>
        <p class="my-6 font-serif text-2xl text-center">Friday, 04 October 2024, 12:00pm (noon).</p>

        <p class="my-6 font-serif text-xl text-center">or until all seats are reserved!</p>
        <p>P.S. We are going to be <strong>sold out</strong> pretty fast!</p>
    </div>
 <hr class="my-2">

 <div class="p-4 mb-5 text-xl text-center bg-red-100 border-2 border-red-800 rounded-lg">
    <p>Only less than 10 seats are available! </p>
 </div>
    <p class="text-xl font-semibold text-center underline underline-offset-4 decoration-4 decoration-green-600">Now you have two choices:</p>

    <div class="space-y-4">
        <a href="#booking" class="block mt-4 text-xl font-semibold text-center underline"> > Book now your seat! < </a>
        <p>Join the greatest group of foodies and share one of the <strong>most amazing Japanese dinners</strong> in Zurich.</p>
        <p><span class="">Enjoy a delightful night, as a <strong>real food explorer</strong></span>, and taste different Japanese dishes in a pure Izakaya style.</p>
        <p>Meet other foodies, meet new people, laugh, drink, eat, smile!</p>
        <p></p>
    </div>

    <div class="mt-8 space-y-4">
        <p class="font-semibold text-center text-red-900">Or you can wait and say:</p>
        <p class="font-serif text-2xl italic text-center">...I'll do it later...</p>
        <p>This is what is going to happen:</p>
        <p> 1. You "think I'm going to do that later..."</p>
        <p> 2. Places run out.</p>
        <p> 3. You want to join but you can't.</p>
        <p> 4. We will all go together except you.</p>
        <p> 5. You will end up alone, with a cold pizza from the delivery.</p>
        <p class="font-semibold">This is what you really want?</p>
        <p>A cold pizza at home alone, while all of us are at the restaurant to taste a japanese omakase in the best restaurant of Zurich?</p>
        <p class="font-serif text-2xl italic">... see?</p>
        <a href="#booking" class="block px-2 py-2 text-2xl font-semibold text-center"> Book now, or you get cold pizza! </a>
    </div>


    <p></p>
    
    {{-- <div class="w-full px-4 py-4 space-y-4 border-2 rounded-lg">
        <p><x-heroicon-o-clock class="inline w-6 mb-1 mr-2" /><span class="font-semibold">Time:</span>
            19:00 - ...
        </p>
        <p><x-heroicon-o-map-pin class="inline w-6 mb-1 mr-2" /><span class="font-semibold">Where:</span>
            Yu An,  Werdstrasse 66, 8004 Zürich (<a class="inline-link"
                href="https://g.co/kgs/2ePeDkt" target="__blank" rel="noopener nofollow">Maps</a>)</p>

        <p><x-heroicon-o-banknotes class="inline w-6 mb-1 mr-2" /><span class="font-semibold">Price:</span>
            74.-</p>
    </div> --}}


    <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold" id="booking">How to book?</h2>
    <p class="mb-6">Follow the instructions in one of these two methods.</p>
    <div class="flex flex-col items-start justify-around w-full mt-4 lg:flex-row">
        <a href="/twint" class="block p-4 mx-auto text-xl big-button">Book with Twint</a>
        <p class="mx-auto my-6 font-semibold">or</p>
        <div class="mx-auto">
            <a href="https://book.stripe.com/8wM7ttfIT37r6BicMM" rel="nofollow noopener" target="_blank" class="block p-4 text-xl big-button">Book with Credit Cart</a>
            <p class="text-center">(+2.70 fee)</p>
        </div>
    </div>

    <h3 class="block mt-12 text-xl font-semibold">The Fine Print Just to Be Totally Clear</h3>
    <ul class="pt-2 mb-4 space-y-4 list-inside">
        <li>All prices are in Swiss Francs and include the MwSt.</li>
        <li>Spots are assigned on a first-come, first-served basis. They may terminate before the deadline.</li>
        <li>The <strong>deadline</strong> for the booking, cancellations and reimbursement is:</li>
        <li class="text-xl font-semibold text-center">Friday 04 October 2024 12:00pm (noon), Zurich Time</li>
        <li>To cancel, write a message via Whatsapp (preferably), or Event, the timestamp of the message is the reference. I will twint you back the total amount or cancel the credit cart payment.</li>
        <li class="font-semibold">Changing the RSVP on Event will not be considered, since I do not get notified. Please write me.</li>
        <li>Any later from that date, no reimbursement will be issued, and the transaction will be considered final.</li>
        <li>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have to find that person.)</li>
        <li>In case of cancellation of the dinner from my side, a full 100% reimbursement will be issued.</li>
    </ul>
</article>



@endsection