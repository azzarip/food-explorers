@extends('azzarip::layouts.1col')

@php
    $seo = new SEO(
        title: 'Food Explorers - #1 Zurich Foodie Community',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city.',
    );

@endphp

@section('main')
<section class="flex items-center justify-center min-h-screen px-2 bg-center bg-no-repeat bg-cover bg-slate-950 max-lg:-mx-2">
    <div class="flex-col justify-between w-full min-h-screen pt-24 pb-8 max-lg:flex">

      <div>
        <h1 class="flex flex-col items-center max-w-4xl gap-5 mx-auto lg:flex-row">
            <img src="@image('logotype.webp')" alt="Food Explorers">
        </h1>
        <p class="my-4 font-serif text-2xl font-black text-center lg:text-5xl text-amber-200/80"> Greatest Foodie Community in
            Zurich</p>
      </div>

      <div class="max-w-2xl mx-auto">
        <p class="font-serif text-xl italic text-center text-white lg:my-16 lg:text-3xl">"Find Foodie Friends and Savor Delicious Adventures Together!"</p>
            </div>
      <div class="grid items-center w-full grid-cols-1 gap-3 px-2 mx-auto text-2xl lg:mt-24 lg:w-1/2 lg:grid-cols-2 lg:gap-5">
          <div class="w-full py-2 mx-auto text-center bg-transparent border-2 rounded-full cursor-pointer text-amber-200 border-amber-400 srounded-full lg:pt-2 h-fit hover:text-black hover:bg-amber-100/90"
              onclick="scrollToElement('start')">
              Read More <x-heroicon-o-chevron-down class="inline w-6 h-6" />
          </div>
          <div class="w-full mx-auto text-2xl text-center std-button">
              <a href="{{ auth()->check() ? route('my') : route('register') }}" class="block p-1 text-2xl">
                  Become a Food Explorer
              </a>
          </div>
      </div>
      
    </div>
    
</section>


    <article class="max-w-4xl pt-8 mx-auto" id="start">
        <p class="font-serif text-3xl font-semibold">Dear Foodie,</p>
        <h2 class="mb-2 text-3xl font-semibold text-center">All the Restaurants we visited so far!</h2>
        <p class="my-2">Here you can see all the restaurants that we visited recently:</p>
        <div class="w-full border-2 border-green-800">
            <iframe
                src="https://www.google.com/maps/d/u/0/embed?mid=1ZY8dzh0H2i01CjKrxoh8At79T8o7v5w&ehbc=2E312F&noprof=1&z=13&ll=47.380312,8.528562"
                height="480" class="w-full"></iframe>
        </div>
    </article>
@endsection
