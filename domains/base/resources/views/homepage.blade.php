@extends('azzarip::layouts.1col')

@php
    $seo = new SEO(
        title: 'Food Explorers - #1 Zurich Foodie Community',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city.'
        );

@endphp

@section('main')
<section class="px-2 bg-black bg-center bg-no-repeat bg-cover max-lg:-mx-2 h-fit">
  <div class="pb-12 text-white bg-black-900/80">
      <div class="h-12 lg:h-24"></div>
      <h1 class="flex flex-col items-center max-w-3xl gap-5 mx-auto lg:max-w-3xl lg:flex-row">
        <div>
          <img src="{{ image('food.webp') }}"  alt="Food Title" class="mx-auto max-lg:w-1/2">
        </div>
        <div>
          <img src="{{ image('explorers.webp') }}"  alt="Explorers Title" class="w-full">
        </div>
      </h1>
      <div class="h-12 lg:h-24"></div>
      <p class="my-4 font-serif text-3xl font-normal text-center lg:text-4xl">#1 Foodie Community in Zurich</p>
      
      <div class="h-24 lg:h-24"></div>

      <div class="flex flex-col items-center gap-3 px-2 text-2xl lg:gap-5 lg:flex-row">
        <div class="w-full py-2 mx-auto text-center text-white bg-transparent border-2 border-white rounded-full cursor-pointer srounded-full lg:pt-2 h-fit lg:w-1/4 hover:text-black hover:bg-white" onclick="scrollToElement('start')">
        Read More <x-heroicon-o-chevron-down class="inline w-6 h-6" />
        </div>
        <x-button :link="auth()->check() ? route('my') : '/register'">
          Become a Food Explorer
        </x-button>
      </div>
      </div>
  </div>
</section>
<article class="wrapper" id="start">
  <h2 class="mb-2 text-3xl font-semibold text-center">All the Restaurants we visited so far!</h2>
  <p class="my-2">Here you can see all the restaurants that we visited recently:</p>
  <div class="max-w-sm border-2 border-green-800 lg:max-w-3xl">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZY8dzh0H2i01CjKrxoh8At79T8o7v5w&ehbc=2E312F&noprof=1&z=13&ll=47.380312,8.528562" height="480" class="w-full"></iframe>
  </div>
</article>

@endsection
