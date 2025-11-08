@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Omakase Menu',
        image: image('omakasebg.webp'),
        description: 'Omakase Menu at Yu-An on the 25. November 2025. Places are limited, book now.',
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
<div class="relative h-screen w-full bg-cover bg-center" style="background-image: url('/images/omakasebg.webp');">
  {{-- <div class="absolute inset-0 bg-black/30"></div> --}}

  <!-- Your content -->
  <div class="relative z-10 flex items-center flex-col justify-center h-full text-white">
    <p class="text-3xl lg:text-4xl font-trajan text-amber-400">Food Explorers</p>
    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold">OMAKASE</h1>
    <p class="text-2xl lg:text-3xl">Yu An</p>
    <p class="text-2xl lg:text-3xl text-amber-200 pt-8">Tuesday 25. November 2025</p>
    <div class="max-w-sm px-4">
        <x-button link="#article" >Read more</x-button>
    </div>
  </div>
</div>

<div class="flex flex-row items-center justify-between lg:items-start" id="article">
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
    <p class="mt-2 text-xl text-center">Tuesday 25. November 2025, 19:15</p>

    <div class="space-y-4 mt-8">
        <p><strong> Omakase お任せ</strong> is a Japanese term that means "<em>I leave it up to you</em>".</p>
        <p>It is a commonly used expression for a menu organized by the chefs of very famous restaurants.</p>
        <p>On <strong>Tuesday 25 November</strong>, the team of the restaurant of Yu An will welcome us on a splendid journey through the Nippon food.
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
        <li><strong>Miso-Glazed Nasu Dengaku (Vegi)</strong>  
            <br>Grilled eggplant with a rich miso glaze, a perfect blend of sweet and savory.</li>
        <li><strong>Buta no Kakuni</strong>  
            <br>Tender, slow-braised pork belly, served in a flavorful soy garnish.</li>
        <li class="mt-4">
            <p class="italic">Steamed Rice <span>(can be ordered separately but it is <strong>not included</strong> )</span></p>
        </li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">Dessert - 5. Round</h3>
    <p class="pl-4 mb-4">Dessert is not included, but the staff is available if you would like to order something sweet to finish your meal.</p>


    
    <div class="px-4 max-w-md mx-auto my-8">
        <x-button link="https://wa.me/41787131882?text=Hey%2C%20I%20would%20like%20to%20join%20the%20Omakase" target="_blank">
        Click here to book!
        </x-button> 
    </div>
    
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
            <span class="font-serif text-6xl text-green-900">76.-</span>
        </p>
        <p>76.- Francs per person, for all that magic you have seen above!</p>
        <p>The offer is valid until places are sold out.</p>
        <p>P.S. We are going to be <strong>sold out</strong> pretty fast!</p>
    </div>
 <hr class="my-2">


    <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold" id="booking">How to book?</h2>

    <div class="px-4 max-w-md mx-auto">
        <x-button link="https://wa.me/41787131882?text=Hey%2C%20I%20would%20like%20to%20join%20the%20Omakase" target="_blank">
        Click here to book!
        </x-button> 
    </div>
    <h3 class="block mt-12 text-xl font-semibold">The Fine Print Just to Be Totally Clear</h3>
    <ul class="pt-2 mb-4 space-y-4 list-inside">
<ul class="space-y-2 text-sm leading-relaxed">
  <li>All prices are in Swiss Francs (CHF) and include VAT (MwSt.).</li>
  <li>The menu cannot be changed or modified. You may order additional dishes at your own expense.</li>
  <li>Seats are assigned on a first-come, first-served basis and may sell out before the deadline.</li>
  <li>The ticket is fully refundable until:</li>
  <li class="font-semibold text-center">Tuesday, 18 November 2025 — 13:00 (Zurich time)</li>
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