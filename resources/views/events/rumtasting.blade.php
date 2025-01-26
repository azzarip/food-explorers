@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Rum Tasting',
        description: 'Rum Tasting on the 22. February 2025. Places are limited, book now.',
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')

<article class="mt-4 wrapper">
    <p class="font-serif text-3xl font-semibold text-center lg:text-4xl">Discover the Secrets of the World’s Most Exotic Spirit</p>
    <p class="my-4 text-2xl font-bold text-center lg:text-3xl text-amber-800">Saturday 22. February 2025, 18:00</p>
    <div class="w-4/5 mx-auto">
        <img src="@image('rum-tasting.webp')" alt="Rum Tasting Banner" class="my-4 rounded shadow-lg lg:block">
    </div>
    <p class="mt-4 mb-6 text-xl text-center lg:text-2xl">Join us for an <strong>Exclusive Rum Tasting Experience</strong> Designed to Discover Rare Flavors, Hidden Stories, and a New Passion for Rum!</p>
    <div class="w-4/5 mx-auto my-4">
        <x-button link='#offer'>I want to book my spot!</x-button>
    </div>
    <hr>

<div class="mt-4 text-y lg:text-xl">
        <p class="font-serif text-2xl font-semibold">Dear Foodie,</p>

        <p>If you are a passionate of distillated, this is an event you cannot miss.</p>
        <p>Together, we will </p>


        <h2 class="font-serif text-2xl font-semibold text-center">What is Rum really?</h2>
        <p>Maybe you know, but Rum is nothing else that the <strong>distilled spirit</strong> produced from the fermented juice of sugar cane or its byproducts.</p>
        <p>What is interesting about Rum is not simply the really humble origin of its raw materials. </p>
        <p>But rather, the impressive story, and sensory voyage that Rum brings with, t </p>

        <p>Each sip of a really nice and elegant rum it's a story, a voyage and <strong> a celebration of Caribbean cultures</strong>.</p>
        
        <h2 class="font-serif text-2xl font-semibold text-center">A Journey to the Heart of the Caribbean</h2>
        <p>Exploring rum means diving into centuries of history and craftsmanship, each bottle offering a glimpse into the cultures and traditions of the islands.</p>
        <div>
            <img src="@image('caribbean-map.webp')" alt="Caribbean Map"> 
        </div>

        <h2 class="font-serif text-2xl font-semibold text-center">A Glimpse of Rum History</h2>
        <p>Rum has been traditionally attached to Pirates.</p>
        <p>Jack Sparrow in the famous film series, was always asking or drinking rum.</p>
        <p>The infamous "<strong>grog</strong>" (a mix of rum, water, lime, and sugar) became a staple for sailors to combat scurvy and keep water supplies drinkable.</p>
        <p>The romanticization of the figure of the pirates through movies in popular culture has led Rum to be a symbol of the Caribbean and of this chapter of the history.</p>
        <p>There are many brand, like Captain Morgan that strongly attach their visuals to this legacy.</p>

        <h3 class="font-serif text-xl font-semibold">Rum is not anymore just a  Pirate's drink</h3>
        <p>The purpose of this Rum Tasting is to make you discover new flavors, new tastes and maybe a new spirit</p>
        <p>A lot of people associate Rum to the supermakret quality one.</p>
        <p>A "shotter" liquer just used to make teenagers drunk at a cheap price.</p>

        <h2 class="font-serif text-2xl font-semibold text-center">There are three types of Rum</h2>
        <p>In the rum world, each bottle belongs to one of these three types:</p>
        <div class="mx-auto space-y-4 max-w-96">
            <div class="py-4 text-xl font-bold text-center text-black border-2 border-black rounded">
                SHOTTERS
            </div>
            <div class="py-4 text-xl font-bold text-center text-black rounded" style="background: linear-gradient(200deg, #66e4bc, #3faf8c)">
                MIXERS
            </div>
            <div class="py-4 text-xl font-bold text-center text-black rounded" style="background: linear-gradient(200deg, #facc15, #d97706);">
                SIPPERS
            </div>
        </div>
        

        <p>As the name suggests:</p>
        <ul class="space-y-2 list-disc list-inside">
            <li><strong>Shotters</strong>: The shotters are really bad products, with a lot of off-flavors and bad aromas, really difficult to drink, therefore you can only shot them. An example is the typical Rum sold in supermarkets. You should <span class="font-bold text-red-800">AVOID</span> them completely.</li>
            <li><strong>Mixers</strong>: Mixers belong that category of liquers are designed for making delicious cocktails.</li>
            <li><strong>Sippers</strong>: Are the most complex and elegant distillates. They are not ideal for cocktails as they are usually really dominant in flavors, and are best drank together.</li>
        </ul>
        
        <hr>
        <p>Here is my offer for you:</p>
        <h2 class="font-serif text-3xl font-bold text-center">Explore Rum</h2>
        <p class="my-4 text-2xl font-semibold text-center lg:text-3xl text-amber-800">Saturday 22. February 2025, 18:00</p>

        <p class="font-serif text-3xl font-bold text-center text-green-800"><small class="text-lg">CHF</small> 49.-</p>

</div>
</article>

<div class="fixed bottom-0 left-0 w-full border-t bg-slate-50">
    <div class="grid grid-cols-2 wrapper">
        <div>
            <p>Saturday, 22 Feb - 19:00</p>
            <p class="my-1 font-bold">Explore Rum</p>
            <p><x-heroicon-s-check-circle class="inline w-6 h-6 mb-1 text-green-600" /> 6 people are going</p>
        </div>

        <div class="py-2">
            <x-button :link="durl('/rum-tasting', 'book')" class="">Reserve </x-button>            
        </div>

    </div>
</div>


@endsection