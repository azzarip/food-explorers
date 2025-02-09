@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Exploring Malaysia - Food Explorers',
        description: 'Malay Tasting Menu at Afatt on the 5. March 2025. Places are limited, book now.',
    );
@endphp

@section('main')
<div class="flex flex-row items-center justify-between -mt-4 lg:items-start">
<div class="flex flex-row items-center justify-start w-fit">
    <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-32">
        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="mx-auto">
        <span class="text-2xl text-center text-amber-800 lg:text-4xl font-trajan">Food Explorers</span>
    </div>
</div>
<div class="float-right mt-2 w-28">
    <img src="@image('afatt.webp')" alt="A Fatt Logo">
    <p class="font-serif text-3xl font-bold text-center text-red-800">a fatt</p>
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="my-4 font-serif text-4xl font-bold text-center lg:text-5xl">Exploring Malaysia</h1>
    <p class="font-serif text-2xl font-semibold text-center">A <span class="text-amber-800">culinary journey</span>  through authentic flavors at <span class="text-red-800">a fatt</span></p>
    <p class="mt-2 text-xl text-center">Wednesday 5. March 2025, 19:00</p>

    <h2 class="my-6 font-serif text-2xl font-semibold">What is this dinner?</h2>

    <div class="space-y-4">
        <p><strong>Exploring Malaysian</strong> is an exciting opportunity to dive into the rich and diverse flavors of Malaysia.</p> 
        <p>On <strong>Wednesday 5. March</strong>, the team at A Fatt restaurant will welcome us for an unforgettable evening, where we'll explore a variety of traditional and modern Malaysian dishes, from savory curries to delicious pork belly and even seafood.</p> 
        <p><strong>A Fatt</strong>, located near Limmatplatz, is considered by many the best Malaysian restaurants in Zurich, with <strong>4.7 stars on Google Maps</strong>.</p> 
        <p>The restaurant’s dining style is similar to a Tavolata, where a range of dishes are served together, allowing you to share and experience the diversity of Malaysian cuisine.</p> 
        <p>This is a popular style of eating in Malaysia, where meals are meant to be shared with friends. </p>
        <p>It’s a truly social way to dine, and you’ll get to <strong>enjoy a wide variety of dishes</strong> that showcase the <strong>vibrant flavors of Malaysia</strong>.</p> 
        <p>The menu has been chosen together with the chef to <strong>guarantee you the most traditional experience</strong>.</p>
        <p>Now, let’s take a closer look at the menu:</p>
    </div>
    
    <h2 class="my-6 font-serif text-2xl font-semibold text-center">Menu</h2>

    <h3 class="my-6 font-serif text-2xl">Starters</h3>
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
    <h3 class="my-6 font-serif text-2xl">Main Dishes</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Sushi Rolls</strong>
        <p>A selection of their signature rolls, we will taste Salmon (<em>Sake</em>), Tuna (<em>Maguro</em>) and Shirmps (<em>Ebi</em>)
             rolls in different variation. Their sushi is well known in the whole city. </p>
            <p>We will taste different style of rolls.</p>
        </li>
    </ul>
   
    <h3 class="my-6 font-serif text-2xl">Dessert</h3>
    <p class="pl-4 mb-4">Dessert is not included, but the staff is available if you would like to order something sweet to finish your meal.</p>
    <p></p>


    
    <div class="px-4 pb-4 bg-blue-100 border-4 rounded-lg border-sky-700">
        <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
        <p><strong>This means also water</strong> or anything else not written above.</p>
        <p>You will order directly at the restaurant what you want to drink, and <strong>pay for it at the checkout</strong>.</p>
    </div>
    <hr>

    @if(\Carbon\Carbon::parse('01/16/2025 13:00')->isPast())
        
    <div class="mt-6 space-y-4">
        <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h2>
        <p>If you go to the restaurant with 4 people to taste all of the previously shown menu you will pay almost 300.- Francs in Total.</p>
        <p>You will have this menu, only for that night at:</p>
        <p class="text-center">
            <span class="font-serif text-4xl text-red-900 line-through">75.</span>
            <span class="font-serif text-6xl text-green-900">62.-</span>
        </p>
        <p>62.- Francs per person, for all that magic you have seen above!</p>
        <p>The offer is valid until all seats are reserved!</p>
        <p>P.S. We are going to be <strong>sold out</strong> pretty fast!</p>
    </div>
 <hr class="my-2">
    <p class="text-xl font-semibold text-center underline underline-offset-4 decoration-4 decoration-green-600">Now you have two choices:</p>

    <div class="space-y-4">
        <x-button :link="durl('/exploring-malaysia', 'book')"> Book now your seat </x-button>
        <p>Join the greatest group of foodies and share one of the <strong>most amazing Malay dinner</strong> in Zurich.</p>
        <p><span class="">Enjoy a delightful night, as a <strong>real food explorer</strong></span>, and taste different Malaysian dishes in a pure & authentic style.</p>
        <p>Meet other foodies, meet new people, laugh, drink, eat, smile!</p>
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
        <x-button :link="durl('/exploring-malaysia', 'book')"> Book now your seat </x-button>
        <p>Or you get a cold pizza!</p>
    </div>


    @else
    <div class="mt-6 space-y-4">
        <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h2>
        <p>For you and the people coming to <strong>Milano</strong>, I reserved a special price of: </p>
        <p class="font-serif text-6xl text-center text-green-900">57.-</p>
        <p>The offer is valid only until <strong>Sunday 16. February at 13.00</strong>.</p>
        <p>Afterwards I will publish this offer to the whole group and the price will increase, and you will fight with everyone else for the remaining seats.</p>
        <div id="countdown" class="font-serif text-2xl font-semibold text-center lg:text-3xl"></div>
        <p>Time is running! </p>
        <div class="p-4 border-2 border-green-800 rounded shadow-sm">
        <h3 class="text-2xl font-semibold text-center">To reserve your place</h3>
        <p>Just twint me the amount of 57.- and I will block you a place.</p>
        <p>That's it!</p>
        <p>My number is 078 713 18 82, just for double checking.</p>
        </div>
    @endif
    <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold">FAQ</h2>
    <h3 class="block mt-4 text-xl font-semibold">Can the dishes be changed?</h3>
    <p>The menu is preset and we cannot change the dishes, if there is a dish you don't like, you can skip it and take some more from the others.</p>
    <p>Each dish is served in trays, so there will be more than enough for everyone.</p>
    <p>The portions are quite abundant, don't worry you will go home really full.</p>

    <h3 class="block mt-4 text-xl font-semibold">What if I cannot come?</h3>
    <p>The <strong>deadline</strong> for cancellations and reimbursement is:</p>
    <p class="text-xl font-semibold text-center">Tuesday 25 February 2025 at 13:00, Zurich Time</p>
    <p>To cancel, write me message via Whatsapp or at my email. I will twint you back the total amount or cancel the credit cart payment.</p>
    <p class="font-semibold">Changing the RSVP on Meetup will not be considered, since I do not get notified. Please write me.</p>
    <p>Any later from that date, no reimbursement will be issued, and the payment will be considered final.</p>
    <p>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have to find that person.)</p>
    <p>In case of cancellation of the event from our side, a full 100% reimbursement will be issued.</p>
    
    <div class="h-12"></div>
</article>



@endsection

@push('scripts')
<script>
    function startCountdown(targetDate) {
        function updateCountdown() {
            const now = new Date().getTime();
            const timeRemaining = targetDate - now;

            if (timeRemaining <= 0) {
                document.getElementById("countdown").innerHTML = "Time's up!";
                clearInterval(interval);
                return;
            }

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = 
                `${days} Days ${hours} Hours ${minutes} Minutes ${seconds} Seconds`;
        }

        updateCountdown(); 
        const interval = setInterval(updateCountdown, 1000);
    }

    const targetDate = new Date(2025, 1, 16, 13, 0, 0).getTime(); 
    startCountdown(targetDate);
</script>

@endpush