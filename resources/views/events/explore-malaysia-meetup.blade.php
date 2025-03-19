@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Exploring Malaysia - Food Explorers',
        description: 'Malay Tasting Menu at Afatt on the 5. March 2025. Places are limited, book now.',
        image: image('explore-malaysia.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
<div class="flex flex-row items-center justify-between -mt-4 lg:items-start">
<div class="flex flex-row items-center justify-start w-fit">
    <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-fit lg:flex lg:items-center">
        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="w-24 mx-auto">
        <span class="text-2xl text-center text-amber-800 lg:text-4xl font-trajan">Food Explorers</span>
    </div>
</div>
<div class="float-right mt-2 w-28 lg:mr-12">
    <img src="@image('afatt.webp')" alt="A Fatt Logo">
    <p class="font-serif text-3xl font-bold text-center text-red-800">a fatt</p>
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="my-4 font-serif text-4xl font-bold text-center lg:text-5xl">Explore Malaysia</h1>
    <p class="mt-2 mb-4 text-2xl text-center font-trajan">Wednesday 5. March 2025, 19:00</p>

    <img src="@image('explore-malaysia.webp')" alt="Explore Malaysia Banner" class="rounded-lg shadow-md">
    <p class="max-w-xl mx-auto mt-4 font-serif text-2xl font-semibold text-center lg:text-3xl">A <span class="text-amber-800">culinary journey</span>  through authentic flavors at <span class="text-red-800">a fatt</span></p>
    <p class="italic text-center">Limmatstrasse 189, 8005 Zürich</p>
    <div class="mt-4 space-y-4">
        <p>Picture yourself in a bustling night market in <strong>Kuala Lumpur</strong>.</p>
        <p>The air is filled with the <strong>aromatic blend of sizzling woks, smoky barbecued meats, and fragrant spices</strong>.</p> 
        <p>Laughter and chatter fill the air as diners gather around shared tables, swapping stories over mouthwatering dishes.</p>
    
        <p>On <strong>Wednesday 5. March</strong>, the <strong class="text-red-800">A Fatt</strong> restaurant will transform into your gateway <strong>to Malaysia</strong>, offering an <strong>exclusive feast</strong> designed to take your taste buds on a journey through its vibrant flavors.</p> 
        
        <p class="text-2xl text-center text-bold">Zürich’s most beloved Malaysian restaurant, will welcome us for an <strong>unforgettable dining experience</strong></p> 
        <p>It will be a <strong>one-time-only feast</strong> featuring the bold and diverse flavors of the South East Asia.</p>
        <p><strong>A Fatt</strong>, located near Limmatplatz, is considered by many the best Malaysian restaurants in Zurich, with <strong>4.7 <x-heroicon-s-star class="inline w-6 h-6 text-amber-600"/> on Google Maps</strong>.</p> 
        <p>The restaurant’s follows a <strong>Authentic Chinese Style</strong> where a range of dishes are shared together, in a style similar to a Tavolata. </p>

        <p>This isn't just a dinner, it's a  <strong>shared adventure</strong>. In true Malaysian fashion.</p>
        <p>Our tables will be filled with plates to be passed around,  <strong class="text-amber-900">bringing food lovers together</strong> and making new friends over a this experience.</p>
        <p>You will <strong class="text-amber-900">share and savor</strong> the incredible diversity of Malaysian cuisine.</p> 
        <p><x-heroicon-s-star class="inline w-6 h-6 text-yellow-500"/>If you’ve joined me for a Japanese Omakase before, this will have a similar style—where we share and enjoy a variety of dishes together. <x-heroicon-s-star class="inline w-6 h-6 text-yellow-500"/> </p>
        <p>Plates are passed around, <strong>flavors are explored together</strong>, and every meal becomes a social event.</p>
        <p>This is a popular style of eating in Malaysia, where meals are meant to be shared with friends. </p>
        <p>It’s a truly social way to dine, and you’ll get to <strong>enjoy a wide variety of dishes</strong> that showcase the <strong>fragrant flavors of Malaysia</strong>.</p> 
        <p>To ensure an <strong>authentic experience</strong>, we have worked closely with the chef to craft a special menu that highlights the most traditional and beloved Malaysian dishes.        </p>
        <p>Now, let’s take a closer look at what awaits you...</p>
    </div>
    
    <h2 class="my-6 font-serif text-2xl font-semibold text-center lg:text-3xl">Menu</h2>

    <h3 class="my-6 font-serif text-2xl">Starters</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Char Kuey <span class="ml-2 text-red-800">炒蘿蔔糕</span></strong>  
            <br>This is the traditional Malay radish cake. Crispy on the outside, soft and delicate inside—these wok-fried radish cakes are infused with aromatic garlic, umami-rich soy sauce, and a hint of smoky wok hei.</li>
        <li><strong>Achar <span class="ml-2 text-red-800">來西亞泡菜</span></strong>  
            <br>Vibrant, golden-hued pickles offer a crisp, refreshing crunch, balancing sweet, sour, and spicy flavors in perfect harmony.</li>
        <li><strong>Fu Pi Juan <span class="ml-2 text-red-800"> 腐卷娟</span></strong>  
            <br>Golden-brown tofu skin rolls encasing a juicy and flavorful filling of finely chicken and shimpss.</li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">Main Dishes</h3>
    <ul class="pl-4 space-y-4">

        <li><strong>Sin Yuk (Crispy Pork Belly)<span class="ml-2 text-red-800"> 蒜香燒肉</span> </strong>
            <p>Succulent slices of pork are slow-roasted until tender and caramelized. Crunchy outside with a softer meat inside.</p>
        </li>
        <li><strong>Char Siu (BBQ Pork)<span class="ml-2 text-red-800">叉燒</span> </strong>
            <p>Pork marinated in a rich blend of soy sauce, honey, hoisin, and aromatic spices, then roasted. A true chinese BBQ classic.</p>
        </li>
        <li><strong>Kam Hiong Chicken<span class="ml-2 text-red-800">金香雞 </span> </strong>
            <p>Juicy chicken pieces are stir-fried, with a blend of soy sauce, sambala and onions. Every bite is a fragrant explosion of wok-fried goodness</p>
        </li>
        <li><strong>Sambal Prawns<span class="ml-2 text-red-800"> 叁峇蝦 </span> </strong>
            <p>Juicy prawns smothered in a rich, fiery sambal sauce, bursting with bold flavors of garlic and a hint of sweetness. Served hot in a satay sauce.</p>
        </li>
        <li><strong>Roasted Duck<span class="ml-2 text-red-800"> 隻烤鴨 </span> </strong>
            <p>A crispy, golden-brown duck, roasted to perfection, with tender, juicy meat inside.</p>
        </li>
        </ul>
        <h3 class="my-6 font-serif text-2xl">Sides</h3>
        <ul class="pl-4 space-y-4">
        <li><strong>Homemade Eggtofu <span class="ml-2 text-red-800">椒鹽蛋豆腐        </span> </strong>
            <p> It is a crispy, golden tofu bites with a silky and soft center. They are tossed in fragrant sauces for an irresistible kick.</p>
        </li>
        <li><strong>Stir fried vegetables<span class="ml-2 text-red-800"> 炒什錦蔬菜 </span> </strong>
            <p>Fresh, crunchy vegetables stir-fried together, a nice side dish to balance the more savory mains.</p>
        </li>
        
        <p>All the dishes will be accompanied by rice, included in the menu.</p>
    </ul>
   
    <h3 class="my-6 font-serif text-2xl">Dessert</h3>
    <p class="pl-4 mb-4">Dessert is not included, but the staff is available if you would like to order something sweet to finish your meal.</p>
    
    <div class="px-4 pb-4 mb-6 bg-blue-100 border-4 rounded-lg border-sky-700">
        <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
        <p><strong>This means also water</strong> or anything else not written above.</p>
        <p>You will order directly at the restaurant what you want to drink, and <strong>pay for it at the checkout</strong>.</p>
    </div>
    
    <div class="max-w-lg mx-auto">
        <x-button :link="durl('/explore-malaysia', 'book')" > Reserve now your seat! </x-button>
    </div>
    <p class="text-2xl font-semibold text-center">🔥 Limited Seats. One Night Only. 🔥</p>
    <p class="mt-4">Our last special dinner event sold out in less than 48 hours. This is your only chance to enjoy this exclusive menu at this special price.    </p>
    <h2 class="mt-12 mb-4 font-serif text-2xl font-semibold">How is the dinner organized?</h2>
    <div class="mt-6 space-y-4">
        <p>✨ <strong>A Feast Meant to Be Shared</strong> ✨</p>
        <p>Step into the warm, welcoming spirit of <strong>authentic Malay dining</strong>, where every meal is a celebration. Instead of individual plates, a stunning array of trays will be placed at the center of the table, inviting you to share, savor, and explore together.</p>
        <p>Each guest will receive a bowl of fragrant rice and an empty plate—ready to be filled with an ever-changing selection of flavors as the kitchen sends out dish after dish in a dynamic, multi-course experience.</p>
        <p><strong>Pass, taste, and enjoy</strong>—this is more than just dinner; it’s a chance to connect over incredible food, making new foodie friends along the way.</p>
        <p>🥂 <strong>Thirsty?</strong> Drinks, beers, and water are available for order at the restaurant and can be paid for separately at checkout.</p>
    </div>
        <img src="https://cdn.i-scmp.com/sites/default/files/styles/1020x680/public/d8/images/canvas/2024/10/21/cbd16316-01fe-4fce-9605-74396af0bac6_930eaeb7.jpg?itok=XUQgmjCJ&v=1729485365" alt="Chinese Dinner" class="my-4 rounded-sm drop-shadow-lg">
    <div class="mt-6 space-y-4">
        <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h2>
        <p>If you went to a restaurant with four people to taste everything on this exclusive menu, you’d pay nearly 75 CHF per person.</p>
        <p>But for this <strong>one-night-only experience</strong>, you’re getting it for just:</p>

        <div class="text-center">
            <p class="font-semibold font-trajan">Exclusive One-Night-Only Menu</p>
            <p class="font-serif text-6xl text-green-900">62.-</p>
        </div>
        <p>That’s right—only 62 CHF for everything you’ve seen above!</p>
        <p class="text-2xl font-semibold text-center">The offer is valid until all seats are reserved!</p>
        <p class="text-center">🚀 Last few Spots available. Grab yours now!</p>
        @if(\Carbon\Carbon::parse('2025-02-19T14:00:00Z')->isFuture())
        <p><strong>You are going to have priority before posting on Meetup</strong>.</p>
        <p>This is the time left before I publish this event, act now or <strong>all the seats are going to be taken</strong>:</p>
        <div class="flex mx-auto my-4 text-center gap-x-4 w-fit">
            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-12 h-12 text-2xl font-bold border-2 rounded-full bg-blue-200/50 lg:w-16 lg:h-16"
                    id="days">00</div>
                <p>Days</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-12 h-12 text-2xl font-bold border-2 rounded-full bg-green-200/50 lg:w-16 lg:h-16"
                    id="hours">00</div>
                <p>Hours</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-12 h-12 text-2xl font-bold border-2 rounded-full bg-yellow-200/50 lg:w-16 lg:h-16"
                id="minutes">00</div>
                <p>Minutes</p>
            </div>
            <div class="flex flex-col items-center">
            <div class="flex items-center justify-center w-12 h-12 text-2xl font-bold border-2 rounded-full bg-red-200/50 lg:w-16 lg:h-16"
                id="seconds">00</div>
                <p>Seconds</p>
            </div>
        </div>
        <p>When the timer reaches zero, <strong>first come, first served</strong> — and you’ll probably miss out.</p>
        @endif
        <p>We are going to be <strong>sold out</strong> pretty fast!</p>
    </div>
 <hr class="my-2">
    <p class="text-xl font-semibold text-center underline underline-offset-4 decoration-4 decoration-green-600">Now you have two choices:</p>

    <div class="space-y-4">
        <div class="max-w-lg mx-auto">
            <x-button :link="durl('/explore-malaysia', 'book')"> Book now your seat </x-button>
        </div>
        <p>Join the greatest group of foodies and share one of the <strong>most amazing Malay dinner</strong> in Zurich.</p>
        <p><span class="">Enjoy a delightful night, as a <strong>real food explorer</strong></span>, and taste different Malaysian dishes in a pure & authentic style.</p>
        <p>Meet other foodies, meet new people, laugh, drink, eat, smile!</p>
    </div>

    <div class="mt-8 space-y-4">
        <p class="font-semibold text-center text-red-900">Or you can wait and say:</p>
        <p class="font-serif text-2xl italic text-center">...I'll do it later...</p>
        <p>This is the <strong>Wait & Regret</strong> option</p>
        <p> 1. You think "I'm going to do that later..."</p>
        <p> 2. Places run out.</p>
        <p> 3. You want to join but you can't.</p>
        <p class="font-semibold"> 4. We will all go together except you.</p>
        <p> 5. You will end up alone, with a cold pizza from the delivery.</p>
        <p class="font-semibold">This is what you really want?</p>
        <p>A cold pizza at home alone, while all of us are at the restaurant to taste a japanese omakase in the best restaurant of Zurich?</p>
        <p class="font-serif text-2xl italic">... see?</p>
        <div class="max-w-lg mx-auto">
            <x-button :link="durl('/explore-malaysia', 'book')"> Book now your seat </x-button>
        </div>
        <p>Or you get a cold pizza!</p>
    </div>

    <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold">FAQ</h2>
    
    <h3 class="block mt-4 text-xl font-semibold">Can the dishes be changed?</h3>
    <p>The menu is defined and we cannot change the dishes, nor adjust the prices.</p>
    <p> If there is a dish you don't like, you can skip it and take some more from the others.</p>
    <p>Each dish is served in trays, so there will be more than enough for everyone.</p>
    <p>The portions are quite abundant, don't worry you will not go home hungry.</p>

    <h3 class="block mt-4 text-xl font-semibold">Are the dishes spicy?</h3>
    <p>Some of the dishes have chili, but just a little touch of it. 1 Pepper out of 3 max.</p>
    <p>You will receive additional spicy sauce if you want to add an extra spicy kick to your portion.</p>

    <h3 class="block mt-4 text-xl font-semibold">What if I have an allergy?</h3>
    <p>Please let me know at <a href="mailto:marco.azzari@foodexplorers.ch" class="font-semibold">marco.azzari@foodexplorers.ch</a> if you have any allergies before booking the event.</p>
    <p>The dishes cannot be changed but we can inform you of any allergens.</p>
    
    

    <h3 class="block mt-4 text-xl font-semibold">What if I cannot come?</h3>
    <p>The <strong>deadline</strong> for cancellations and reimbursement is:</p>
    <p class="text-xl font-semibold text-center">Tuesday 25 February 2025 at 13:00, Zurich Time</p>
    <p>To cancel, write me message via Whatsapp or at my email. I will twint you back the total amount or cancel the credit cart payment.</p>
    <p class="font-semibold">Changing the RSVP on Meetup will not be considered, since I do not get notified. Please write me.</p>
    <p>Any later from that date, no reimbursement will be issued, and the payment will be considered final.</p>
    <p>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have to find that person.)</p>
    <p>In case of cancellation of the event from our side, a full 100% reimbursement will be issued.</p>
    <div class="max-w-lg mx-auto">
        <x-button :link="durl('/explore-malaysia', 'book')"> Book now your seat </x-button>
    </div>
    <div class="h-12"></div>
</article>



@endsection



@push('scripts')
    <script>
        function startCountdown(targetDate) {
            function updateCountdown() {
                const now = new Date().getTime();
                const timeLeft = targetDate - now;

                if (timeLeft < 0) {
                    clearInterval(interval);
                    document.getElementById("days").innerText = "00";
                    document.getElementById("hours").innerText = "00";
                    document.getElementById("minutes").innerText = "00";
                    document.getElementById("seconds").innerText = "00";
                    return;
                }

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById("days").innerText = String(days).padStart(2, '0');
                document.getElementById("hours").innerText = String(hours).padStart(2, '0');
                document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
                document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');
            }

            updateCountdown();
            const interval = setInterval(updateCountdown, 1000);
        }

        const targetDate = new Date('2025-02-19T14:00:00Z').getTime();
        startCountdown(targetDate);
    </script>
@endpush
