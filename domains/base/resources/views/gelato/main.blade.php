@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'I tried ALL the Gelaterias of Zurich: Here is what I found',
        description: 'After trying more than 30 gelaterias in the city center of Zurich, I choose the top 3 and bottom 3 of my list. Here are the winners.',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto mt-4 px-2 mb-12">
        <h1 class="font-serif text-4xl lg:text-5xl text-center font-bold leading-relaxed lg:leading-relaxed">
            I tried ALL the Gelaterias of Zurich: Here is what I found
        </h1>
        <p class="font-head text-2xl lg:text-3xl mt-2 mb-12 text-stone-800">After tasting all the gelaterias of Zurich, I ranked them all and here are my favourites</p>

        <div class="space-y-3">
        <h2 class="font-bold text-2xl lg:text-3xl">Here is all the gelaterias I tried:</h2>
        <p>You can find in this map all the gelaterias in </p>
        <iframe src="https://www.google.com/maps/d/embed?mid=1ac4pxfb-Kn2sgMpqreyQIn13R37uA4o&hl=en&ehbc=2E312F" width="640" height="480" class="mx-auto my-4"></iframe> 
        <p>Here is the <a href="/all-gelaterias-of-zurich" class="inline-link">list of all gelaterias of Zurich</a>.</p>
        <p>The list is ranked with my personal vote for each of them.</p>
        </div>

        <div class="space-y-3 mt-4">
        <h3 class="font-bold text-2xl lg:text-3xl">How did I choose the gelaterias?</h3>
        <p>These are my criterias for considering a Gelateria into this list.</p>
        <ul class="list-disc list-inside space-y-3">
        <li>I only choose Gelaterias that serve cones of Ice Creams, in the city (Gemeinde) of Zurich.</li>
        <li>If you cannot order a cone of Ice Cream and only cups or dishes (like Restaurants) I did not consider them.</li>
        <li>If they serve prepackage Ice Cream (Frisco, Nestlé, etc.) I did not consider them.</ò>
        <li>Ice Cream must be served by a human employee.</li>
        </ul>

        <p><strong>Did I miss one?</strong> Let me know per email at marco.azzari (at) foodexplorers.ch</p>
        </div>

             <div class="space-y-3 mt-8">
        <h2 class="font-bold text-2xl lg:text-3xl">How to analyze an ice cream?</h2>
        <p>Ice Cream is not wine, does not have that complexity.</p>
        <p>Still it is a dessert that brings joy and satisfaction if done correctly, or just brain freezes and need to drink water if done uncorrectly.</p>
        <p>I created a <strong>system of 4 pillars</strong> for tasting the Ice Cream.</p>
        <p>In brief, to make an ice cream you need to:</p>
        <ol class="list-inside list-decimal space-y-3 pl-4">
            <li>Make a solution with the given taste.</li>
            <li>Freeze and mix the solution into an iced cream.</li>
            <li>Serve the ice cream into a cone for the customer to enjoy.</li>
        </ol>
        <p>Each three of these steps gets a pillar:</p>
        <ol class="list-decimal list-inside space-y-3 pl-4">
            <li><strong>Taste</strong></li>
            <li><strong>Structure</strong></li>
            <li><strong>Presentation</strong></li>
        </ol>
        <p>But the Ice Cream experience does not end there.</p>
        <p>It is also important how the experience of buying the ice cream: how is the shop, how nice is the waiter, is it easy to buy and choose the ice cream?</p>
        <p>All of these information end in the 4th pillar: <strong>Experience</strong>. </p>
        <p>I gave a vote from 0/3 to 3/3 to each pillar.</p>
        <p>Following this link you will find <a href="/all-gelaterias-of-zurich" class="inline-link">all the gelaterias of Zurich ranked</a> with this method.</p>
        <p>Each pillar is indipendent from each other, you can have a really good structure with horrible taste, or amazing taste served with an horrible experience in the shop.</p>
        <p>For this reason I did not sum up all the pillars vote into a final vote. It does not make sense. </p>

        </div>
    </article>
@endsection