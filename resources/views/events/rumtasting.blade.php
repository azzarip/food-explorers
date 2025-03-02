@extends('azzarip::layouts.1col', ['nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Rum Tasting',
        description: 'Rum Tasting on the 29. March 2025. Learn to taste Rum in a cruise through the Caribbean. Places are limited, book now.',
        image: image('rum-expedition.webp'),
    );
    
@endphp

@section('main')

<article class="mt-2 mb-10 lg:mt-4 wrapper">
    <p class="mb-4 text-4xl text-center lg:text-5xl font-trajan">Rum Expedition</p>
    <p class="font-serif text-xl font-semibold text-center md:text-3xl lg:text-4xl">A <strong class="text-purple-950">Cruise</strong> Through the <span class="text-cyan-900">Spirits</span> of the <span class="text-amber-900">Caribbean</span></p>
    <div class="mx-auto lg:w-4/5">
        <img src="@image('rum-expedition.webp')" alt="Rum Tasting Banner" class="my-4 rounded shadow-lg lg:block">
    </div>
    <p class="mt-4 mb-6 text-center md:text-xl lg:text-2xl">Join us for an <strong>Exclusive Rum Tasting Experience</strong> designed to Discover new Flavors, Hidden Stories, and a New Passion for Rum!</p>
    <p class="my-4 text-2xl font-bold text-center lg:text-3xl text-amber-800">Saturday 29. March 2025, 19:30</p>

    <div class="mx-auto my-4 lg:w-4/5">
        <x-button :link='durl("/rum-expedition", "book")'>I want to book my spot!</x-button>
    </div>

<div class="mt-8 text-y lg:text-xl">
        <p class="font-serif text-2xl font-semibold">Dear Spirit Lover,</p>

<p>On the 29th of March, we embark on our <strong>Rum Expedition</strong>, an evening dedicated to discovering the fascinating heritage and craftsmanship behind the Caribbean’s most iconic spirit. </p>
<p>We’ll taste a curated lineup of <strong class="text-amber-900">6 different rums</strong>, each with its own story, flavor profile, and Caraibic soul.</p>
<p>For one night only, you and other fellow explorers will <strong class="text-blue-900"> set sail on a legendary cruise to the Caribbeans</strong> — without passport required! </p>
<p><strong>This is not just another tasting</strong>, this is a fully immersive experience where every sip takes you deeper into the history, mystery, and mastery of this spirit.</p>

<h2 class="font-serif text-2xl font-semibold text-center">A Journey to the Heart of the Caribbean</h2>
<p>Exploring rum means diving into centuries of history and craftsmanship, each bottle offering a glimpse into the cultures and traditions of the islands.</p>
<div>
    <img src="@image('caribbean-map.webp')" alt="Caribbean Map" class="rounded"> 
</div>
<p>What is interesting about Rum is not simply the really humble origin. </p>
<p>But rather, the impressive story, and sensory voyage that Rum brings.</p>
<p>Maybe you know, but Rum is the <strong>distilled spirit</strong> produced from the fermented juice of sugar cane or its byproducts.</p>

 <p>Each sip of a elegant and modern rum it's a story, a voyage and <strong> a celebration of Caribbean cultures</strong>.</p>
 <h2 class="pt-4 font-serif text-2xl font-semibold text-center">The Birth of Modern Rum</h2>


    <p>Rum has been traditionally attached to Pirates.</p>
    <p>Jack Sparrow in the famous film series, was always asking or drinking rum.</p>
    <p>The romanticization of the figure of the pirates through movies in popular culture made Rum a symbol of the Caribbean.</p>
    <p>There are many brand, like Captain Morgan that strongly attach their visuals to this legacy.</p>

    <div class="p-4 border-2 rounded-lg border-amber-700">
        <p class="font-serif text-xl font-semibold">Today's rum has become a symbol of elegance and finess </p>
    </div>
        <p>Modern rums compete in complexity of flavors with the best whiskeys and wines.</p>
        <p><strong>Contrary to Whiskey</strong>, Rum preserves the caramel notes of sugar cane, and has a much lighter flavors from the barrells.</p>
        <p>Making it much more enjoyable, and easy drinking spirit compared to the scotish or irish liquers.</p>
        <p></p>
        <p>The purpose of this Rum Tasting is to make you discover new flavors, new tastes and maybe a new spirit</p>
        <p>A lot of people associate Rum to the supermakret quality one.</p>
        <p>A "shotter" liquer just used to make teenagers drunk at a cheap price.</p>

        <h2 class="font-serif text-2xl font-semibold text-center">There are three main types of Rum</h2>
        <p>In the rum world, each bottle belongs to one of these three types:</p>
        <div class="mx-auto space-y-4 max-w-96">
            <div class="py-4 text-xl font-bold text-center text-black border-2 border-black rounded">
                SHOTTERS  
            </div>
            <div class="py-4 text-xl font-bold text-center text-black rounded" style="background: linear-gradient(200deg, #66e4bc, #0c7a31)">
                MIXERS
            </div>
            <div class="py-4 text-xl font-bold text-center text-black rounded" style="background: linear-gradient(200deg, #facc15, #d97706);">
                SIPPERS
            </div>
        </div>
        
        <h2 class="font-serif text-2xl font-semibold text-center">Rum and Whiskey</h2>


        <p>As the name suggests:</p>
        <ul class="space-y-2 list-disc list-inside">
            <li><strong>Shotters</strong>: The shotters are usually really bad distillates, with a lot of off-flavors and bad aromas, extremely difficult to drink, therefore you can only shot them. Hence the name. An example is the typical Rum sold in supermarkets. You should <span class="font-bold text-red-800">AVOID</span> them completely.</li>
            <li><strong>Mixers</strong>: Mixers belong that category of liquers are designed for making delicious cocktails.</li>
            <li><strong>Sippers</strong>: Are the most complex and elegant distillates. They are not ideal for cocktails as they are usually really dominant in flavors, and are best drank together.</li>
        </ul>
        
        <hr>
        <p>Here is my offer for you:</p>
        <h2 class="text-3xl font-bold text-center font-trajan">Rum Expedition</h2>
        <p class="my-4 text-xl font-semibold text-center md:text-2xl lg:text-3xl text-amber-800">Saturday 29. March 2025, 19:30</p>
        <p class="font-serif text-3xl font-bold text-center text-green-800"><small class="text-lg">CHF</small> 57.-</p>
        <img src="@image('rum-expeidition.webp')" alt="Rum Tasting" class="px-4 rounded">
        <div class="mx-auto my-4 lg:w-4/5">
            <x-button :link='durl("/rum-expedition", "book")'>I want to book my spot!</x-button>
        </div>

    <h2 class="font-serif text-3xl font-semibold">FAQ</h2>
    <p class="font-semibold">How much alcohol is going to be served?</p>
    <p>Each guest will receive six different rums, roughly equivalent to 2–3 glasses of wine.</p>
    <p>If you'd like to revisit any of the rums, we're happy to offer an extra taste.</p>
    <p class="font-semibold">Willthere be food?</p>
    <p>Yes! We'll provide a selection of snacks to complement the tasting, including chips, nuts, and other aperitif-style bites.</p>
    <p>To fully enjoy the experience, we recommend having dinner beforehand.</p>
    <p class="font-semibold"> Can I join if I’m not a rum expert?</p>
    <p>Absolutely! This event is designed for both beginners and rum enthusiasts. Our expert will guide you through the tasting, sharing insights about each rum’s origin, flavor profile, and history.</p>
        <p class="font-semibold">How long does the event last?</p>
    <p>The event itself lasts approximately two hours. At 10pm we have to leave the venue.</p>
    <p>Please note: This event is strictly for guests aged 18 and over.</p>
</div>
</article>


@endsection