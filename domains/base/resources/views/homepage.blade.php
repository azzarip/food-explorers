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
        <p class="my-4 font-serif text-2xl font-black text-center md:text-3xl lg:text-5xl text-amber-200/80"> Nr. <span class="text-3xl lg:text-6xl">1</span> Foodie Community <br class="max-lg:hidden">  in Zurich</p>
      </div>

      <div class="max-w-2xl mx-auto">
        <p class="font-serif text-xl italic text-center text-white md:text-2xl lg:my-16 lg:text-3xl">"Find Foodie Friends and Savor Delicious Adventures Together!"</p>
            </div>
      <div class="grid items-center w-full grid-cols-1 gap-3 px-2 mx-auto text-2xl lg:mt-24 lg:w-1/2 lg:grid-cols-2 lg:gap-5">
          <div class="w-full max-w-lg py-2 mx-auto text-center bg-transparent border-2 rounded-full cursor-pointer text-amber-200 border-amber-400 srounded-full lg:pt-2 h-fit hover:text-black hover:bg-amber-100/90"
              onclick="scrollToElement('start')">
              <p>Read More <x-heroicon-o-chevron-down class="inline w-6 h-6" /></p>
          </div>
          <div class="max-w-lg mx-auto text-2xl text-center std-button">
              <a href="{{ auth()->check() ? route('my') : route('register') }}" class="block p-1 text-2xl">
                  Become a Food Explorer
              </a>
          </div>
      </div>
      
    </div>
    
</section>


    <article class="max-w-3xl pt-8 mx-auto mb-12 text-xl article" id="start">
        <p class="font-serif text-3xl font-semibold">Dear Foodie,</p>
        <p>Let me ask your something...</p>
        <p>Have you ever felt like Zurich, with all its beauty and charm, can sometimes feel a little... cold?</p>
        <p>Especially compared to other European cities?</p>
        <p>Sure, it’s a beautiful city with its lakes and mountains, but when it comes to the food scene… doesn’t it sometimes feel a little underwhelming?</p>
        <p>Too often, it’s <strong>overpriced menus</strong> with average food—and those truly exceptional places? <strong>They’re practically hidden</strong>.</p>        
        <p>Even finding a great restaurant can feel like an uphill battle.</p>
        <p>If you <strong>just moved to Zurich</strong>, probably you are scared of the high prices and the disappointing quality level...</p>
        <p>If you are a <strong>seasoned Zurich inhabitant</strong>, you may be stuck going with your friends and colleagues always to the same places...</p>
        <p>Sure, Zurich has good places to eat, but how do you find the <strong class="text-purple-700">hidden gems</strong>—those incredible spots that serve food so delicious it makes your heart sing?</p>
        <p>The places that aren’t just about the meal but about the <strong>experience</strong>, the <strong>memories</strong>, and the stories you’ll tell afterward?</p>
        <hr>
        <p class="py-6 text-2xl font-semibold text-center ">What if Zurich’s food scene wasn’t a disappointment, but a <span class="font-black text-amber-900">treasure map</span> waiting to be explored?</p>
        <hr>
        <p>But here’s the thing: <strong>Zurich does have incredible restaurants</strong>. </p>
        <p><strong>They exist!</strong> But they don’t make themselves easy to find</p>
        <p>They’re tucked away in alleys you’d never think to explore, serving dishes that could rival the best in Paris or Rome—if only you knew where to look.</p>

        <h2 class="h2">We are Food Explorers!</h2>
        <p>My name is Marco. And I am the chief organizer of this Foodie Community!</p>
        <p>We organize weekly events in Zurich: food and drinks related!</p>
        <p></p>
        <h2 class="mb-2 text-3xl font-semibold text-center">All the placed we explored so far!</h2>
        <p class="my-2">Here you can see all the restaurants and bars that we visited recently:</p>
        <div class="w-full border-2 border-green-800">
            <iframe
                src="https://www.google.com/maps/d/u/0/embed?mid=1ZY8dzh0H2i01CjKrxoh8At79T8o7v5w&ehbc=2E312F&noprof=1&z=13&ll=47.380312,8.528562"
                height="480" class="w-full"></iframe>
        </div>
        <p>Feel free to ask us for a recommendation!</p>


        <h2 class="h2">How does it work?</h2>
        <p>It is pretty simple!</p>
        <ol class="list-inside text-y">
          <li>
            <p class="font-semibold">1. Become a Food Explorer</p>
            <p><a href="{{ route('register') }}" class="inline-link">Click here to register</a>. It is <span class="text-xl italic font-semibold"><x-heroicon-s-sparkles class="inline w-6 h-6 mb-1 text-amber-600"/> TOTALLY FREE! <x-heroicon-s-sparkles class="inline w-6 h-6 mb-1 text-amber-600"/></span></p>
          </li>
          <li>
            <p class="font-semibold">2. Get Weekly Invitations</p>
            <p>Each week, you’ll receive an exclusive invitation to explore a <strong>a new restaurant</strong> in Zurich.</p>
          </li>
          <li>
            <p class="font-semibold">3. Decide If You Want to Join</p>
            <p>Simply RSVP to the invitation if you’d like to attend. You don’t pay anything upfront—just show up, enjoy, and pay <span class="font-semibold">at the restaurant</span> for what you order.
            </p>
          </li>
          <li>
            <p class="font-semibold">4. Change of Plans? No Problem            </p>
            <p>If you can’t make it, just cancel your reservation. Someone else will take your place.</p>
          </li>
        </ol>
        
        <h3 class="h3">Special Events!</h3>
        <p>From time to time, we organize unique culinary experiences with set menus, like:</p>
<ul class="font-semibold list-disc list-inside">
  <li>Japanese Omakase</li>
  <li>Italian Tavolata</li>
  <li>Cheese Tastings</li>
  <li>And many, many other food adventures...</li>
</ul>
<p>All the details—menu, date, price, and conditions—will be shared upfront, so you can decide whether to join.</p>
<p>Ready to uncover Zurich’s hidden culinary gems? Become a Food Explorer Now! And let the adventure begin!</p>
    </article>
@endsection
