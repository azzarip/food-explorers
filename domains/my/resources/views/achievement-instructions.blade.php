@extends('azzarip::layouts.1col')

@section('main')
<div class="px-2 mx-auto">
    <p class="px-2 py-1 mt-4 text-xl text-center rounded-lg bg-slate-100 font-head w-fit"> <a href="/achievements" class="hover:underline"><x-heroicon-o-arrow-left class="inline w-6 h-6 mb-1 ml-2" /> Back to Achievements </a></p>
</div>
<article class="block space-y-4 wrapper">
<h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">What are Achievements?</h1>
    <p>At Food Explorers, we believe every exploration deserves a reward!</p>
    <p>That’s why we’ve introduced the <strong>list of achievement</strong> you can see on the previous page - a little something extra to make your foodie journey even more exciting.</p>
    <p>They are awarded when you attend standout events—those that make our community truly special.</p>
    <p>By participating in our exclusive foodie experiences, you earn achievements that reflect your dedication to exploring the best food Zurich has to offer.</p>
    <p>Nothing extravagant, just a way to celebrate your involvement in the experiences that make Food Explorers unique.</p>
    <p>The more places you visits, the more points you collect, the more foodie experiences you unlock!</p>
    <p>Each achievement, no matter how small is celebrating the unforgettable meals, great company and new flavors you've enjoyed with us!</p>
    <h2 class="h2">Each Achievement has a Status</h2>
    <p>It will be marked <span class="p-1 mr-1 text-sm font-semibold rounded-md bg-amber-200 md:order-3 w-fit text-serif text-amber-800 "><x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /> EXPLORED <x-heroicon-s-sparkles class="inline w-4 mb-1 aspect-square" /></span> if you have attended that event!</p>
    <p>It will be shown as     <span class="p-1 ml-auto mr-2 text-sm font-semibold text-gray-700 rounded-md md:order-3 w-fit bg-stone-200 text-serif"><x-heroicon-s-lock-open class="inline w-4 mb-1 ml-1 aspect-square" /> AVAILABLE</span>, if you have not attended this event. </p>
    <p>It will be <span class="p-1 ml-auto mr-2 text-sm font-semibold text-gray-700 rounded-md md:order-3 w-fit bg-stone-200 text-serif"><x-heroicon-s-lock-closed class="inline w-4 mb-1 ml-1 aspect-square" /> LOCKED</span>, if you don't have enough points to participate in this specific experience. </p>
    <p>Keep coming and earning points to unlock all the Foodie Experiences of Zurich!</p>
</p>
</article>
  
@endsection
