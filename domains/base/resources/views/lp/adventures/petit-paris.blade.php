@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Petit Paris - Food Explorers',
        description: 'Petit Paris. An Adventure through Parisian Bistrots.  From 3. October to 5. October 2025. Places are limited, book now.',
        image: image('petit-paris.webp'),
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
    <article class="max-w-2xl mx-auto">
        <div class="max-lg:px-2 mt-2">
            <h1><img src="@image('petit-paris-logo.webp')" alt="Petit Paris Title" class="w-full lg:max-w-lg mx-auto mb-2"></h1>
            <img src="@image('petit-paris.webp')" alt="Petit Paris" class="rounded-lg shadow-md w-full lg:max-w-2xl mx-auto">
            <p class="font-serif text-3xl  font-semibold text-center rounded-lg m-2 lg:pt-4 ">An Adventure Through
                Parisian Bistrots
            </p>
            <p class="font-serif text-center mt-4 font-semibold text-amber-800 text-xl lg:text-2xl">Friday 3. - Sunday 5.
                October 2025</p>
            <div class="mt-6 w-4/5 lg:w-full max-w-2xl mx-auto">
                <x-button link="#intro">Read More </x-button>
            </div>
        </div>
        <div class="mt-12 space-y-4" id="intro">
            <p class="font-serif text-3xl font-semibold mt-4">Dear Food Explorer,</p>

            <p>If you are reading these words, it means you care and like the events I have been organizing in the past
                years.</p>
            <p class="font-semibold">I am organizing a special weekend in <strong>the most famous European
                    Capital for Food</strong>, from Friday 3 to Sunday 5 October.</p>
            <p>Our adventure will focus on three exceptional Bistrot carefully chosen to showcase the best of Paris'
                finest food scene.</p>
            <p>Each day we will try different things, visit restaurants and bars, while in the mean time we will explore
                the city and its hidden gems.</p>
            <p>It will be my greatest care in <span class="bg-amber-300/50">organizing the most delightful holiday a
                    foodie
                    like you can aspire for</span>.</p>
            <p class="font-bold">In this webpage you will find: </p>
            <ul class="space-y-3 text-xl list-disc list-inside">
                <li><strong>Why Petit Paris?</strong> <br> The story and inspiration behind Parisian Bistrots (<a href="#why" class="inline-link">Go →</a>)</li>
                <li><strong>Our Adventure</strong><br> The plan and itinerary for our weekend together. (<a href="#plan" class="inline-link">Go →</a>)</li>
                <li><strong>How to Book</strong> <br> How to reserve your seat! (<a href="#offer" class="inline-link">Go →</a>)</li>
            </ul>
            <p>So, brush up your french dictionary as in October we go to Paris!</p>
        </div>

        <div class="space-y-4 pt-2" id="why">
            <h2 class="my-6 font-serif text-2xl lg:text-3xl font-semibold text-center">Why Petit Paris?</h2>
            <p>Imagine strolling down cobblestone streets, where the scent of freshly baked croissants drifts through the air, and the warm glow of the vintage streets guides your way.</p>

            <p>The sound of a lively accordion echoes from a charming café, and just ahead, a hidden bistrot awaits—where the secrets of French cuisine unfold like magic.</p>

            <p>Welcome to <span class="font-serif font-semibold">Petit Paris</span>, a foodie adventure through parisian bistrots,
                where you don’t just visit Paris: you live it, taste it, and feel its
                romantic soul through every dish.</p>

            <p>Each day we’ll savor a variety of dishes, with <strong> unforgettable restaurants</strong> and visit <strong>hidden bars</strong>, and discover local food treasures,
                all while uncovering the city’s most enchanting hidden gems.</p>

            <p>This isn't just a weekend trip—it's a Parisian fairy tale for food lovers, a culinary adventure where every moment is sprinkled with delicious and unforgettable flavors.</p>

            <p>A once-in-a-lifetime experience, an adventure only <strong>a true foodie like you</strong> could dream of.</p>

            <p>Paris is the European capital of Food, and I say as an Italian! </p>

            <p>Every city in Europe has its own incredible cuisine, each with its own traditions and flavors. But we all have to admit: no place has romanticized its connection to food, wine, and love quite like Paris.</p>

            <p><span class="font-semibold font-serif text-blue-800">Petit Paris</span> is more than just a trip: it’s an <strong>adventure through the soul of French cuisine</strong>, carefully crafted to bring you to some of the
                most exceptional bistrots and hidden food gems in the city</p>
  
            <p class="border-2 border-blue-700 rounded-lg p-4 font-semibold text-xl"><span class="font-semibold font-serif text-blue-800">Petit Paris</span> will be our adventure focused on visiting exceptional restaurants carefully chosen to showcase the best of Paris’s finest food scene.</p>  
                
            <p>Each restaurant and stop has been handpicked to showcase the very best of Paris’s rich and diverse food scene, giving you a chance to experience its flavors in a way few ever do.</p>
            <p class="font-semibold">Your only <span class="text-amber-800">responsibility</span>? Arrive in Paris on time on Friday.</p>

            <p>From the moment you arrive at the hotel, I’ll take care of everything—so you can fully enjoy this unforgettable culinary journey without any worries.</p>

            <p>This food adventure to Paris will be your chance to discover the French Cuisine as you never had the chance before!</p>

            <p class="font-serif text-xl text-center"> The word "<strong>petit</strong> " means “<em>little</em>” in French.</p>

            <p>France, and especially Paris has been the capital of Haute Cuisine.</p>

            <p>The term "<strong>haute cuisine</strong>" doesn't just refer to high-end restaurants but also to the entire experience: refined techniques, artful presentations, and
            meticulously structured meals served in exclusive, aristocratic settings.</p>

            <p>Today, this style of dining has been pushed to the extreme by Michelin-starred restaurants.</p>

            <p>In Paris, it’s easy to find places where a <strong>single meal costs hundreds of euros</strong>, lasts five hours, and unfolds in an atmosphere of utmost
                formality. But that’s not the Paris I love.</p>

            <p>I called this adventure Petit Paris because I want to help you discover the “smaller” cuisine—less aristocratic, but no less delicious or
                important.</p>

            <h2 class="my-6 font-serif text-2xl font-semibold text-center">The Cuisine of Bistrots</h2>

            <p>For the purest french food lovers, also called <strong>Bistronomie</strong>.</p>

            <p>But let's explore together: what is a Bistrot?</p>

            <p>The word <em>Bistrot</em> is used all over Europe to indicate a <strong>small restaurant  with a few seats, in a cozy setting</strong>.</p>

            <p>Is it the same in Paris? Yes, but is also something more.</p>

            <p>In France, a bistrot is where people come together to share a  meal, a conversation, and a moment of their day.</p>

            <p class="p-4 text-xl border-2 border-amber-700 rounded-lg"><strong>It’s not about fine dining or extravagant dishes;</strong> it’s about simplicity,
                quality, and atmosphere. A true bistrot is warm, unpretentious, and
                deeply rooted in daily life.</p>

            <p>The pace is relaxed yet lively, with the comforting clatter of cutlery, the
                low hum of conversations, and the occasional laughter from a nearby
                table.</p>

            <p><strong>Regulars greet the owner by name</strong>, and the waiters move effortlessly between tables closely packed between each other.</p>

            <p>Old wooden furniture, small chair and some white tableclothes are the only decorations. Maybe opened bottles of wine collected through the years…</p>

            <p class="font-semibold">What matters most is that the food is simple, flavorful, and deeply satisfying</p>

            <p>The menu is often handwritten on a chalkboard, changing daily based on what’s fresh and in season.</p>

            <p>In Paris, a bistrot is a place where life happens. It’s where friends catch up over a glass of wine, where colleagues take a long lunch, and where strangers sit side by side at small wooden tables, exchanging a polite
                bonjour before focusing on their meal.</p>

                <p> <strong> A bistrot is not designed to impress</strong>; it’s
                    designed to make you feel at home, whether you’re a local or a
                    visitor.</p>

                    <p> And once you’ve experienced it, you’ll understand why the
                        French cherish it so much</p>

                <p>That is also why I called this trip Petit Paris, I will bring you <strong>into the
                    heart of the city</strong>, not just as a tourist, but to experience the more
                    daily life and daily food of Paris like the Parisians do.</p>
            
                    <h2 class="my-6 font-serif text-2xl font-semibold text-center">Bistrot Menus</h2>


                    <p class="font-semibold">A bistrot menu is not a book with endless pages of choices.</p>

                    <p>Often it does not even exist in printed version. A bistrot embraces 
                        spontaneity and freshness, crafting dishes based on what’s best at the
                        market that day.</p>

                    <p>A traditional French bistrot meal follows a simple structure: Entrée, Plat, and Dessert.</p>
                 
                    <h3 class="font-serif font-semibold text-center">Entrée</h3>
                    <p>The entrée is the starter, usually something light but full of character.</p>
                    <p>Not to be confused with the American "Entrée" which means main course.</p>
                    <p></p>

                    <h3 class="font-serif font-semibold text-center">Plat</h3>
                    <p>Then comes the plat, the main course, where the heart of the bistrot’s
                        cooking shines.</p>
                    <p> Here you get your meat, your fish or whatever else you ordered.</p>


                    <h3 class="font-serif font-semibold text-center">Dessert</h3>
                    <p>Finally, the dessert, which the French treat with just as much respect
                        as the rest of the meal. .</p>
                    <p> Usually bistrot won’t serve extravagant, modern creations—desserts here are classics, perfected over
                        generations.</p>
                    
                    <p class="font-serif font-semibold text-2xl text-center p-4 border-2 border-red-800 rounded-lg">
                        Desserts are included!
                    </p>

                    <p>Not only they are included, but they are mandatory. If you don’t
                        have dessert in Paris, I am ashamed of you.</p>

                    <p>So in each of the restaurant you will get these three dishes, you will
                        choose your own preferred dish from the menu that the restaurant will
                        hand in that day.</p>

                    <h2  class="my-6 font-serif text-2xl font-semibold text-center underline decoration-4  decoration-blue-700">There are no Menus</h2>
                    <p>This trip is all about exploring the most characteristics Bistrots of Paris.</p>
                    <p>And as you might know, a Bistrot is a really small restaurant, <strong>their menu
                        changes frequently - sometimes weekly, if not daily</strong>.</p>
                    <p>That is the beauty of these places: fresh ingredient, new recipes that
                        reflect the season and the chef ’s inspiration for the day.</p>
                    
                    <p class="font-semibold">Because of this, there’s no fixed menu for our trip.</p>
                    
                    <p>However, to give you a sense of what to expect, I’ve included some
                        past menus from these bistrots, along with a few photos I found
                        online.</p>

                    <p>These will give you an idea of their style, philosophy, and signature
                        dishes, but the exact menu we’ll enjoy might be different.</p>
                    
                    <p>That’s part of the <span class="font-semibold text-green-900">adventure</span>!</p>
                    
                    <p>Rather than focusing on a set list of
                        dishes, <strong>I’ve carefully selected each bistrot based on its quality,
                        atmosphere, and culinary creativity</strong>.</p>

                    <p>In each of the Bistrot, you will have included the three dishes they
                        offer, the combination of Entrée, Plat, and Dessert for one person.</p>
                    
                    <p>So, while I can’t hand you a precise menu in advance, the restaurants
                        have told me they are usually really open to do changes and adapt to
                        your dietary style.</p>

                    <p>You will always find a fish dish, a meat dish and a vegetarian (often with cheese) dish.</p>
                    


                <h2 class="pt-6 font-trajan text-3xl lg:text-4xl font-semibold text-center" id="plan">The Plan</h2>
                <p>In this weekend, <strong>we will explore three different bistrots</strong>, each carefully selected to showcase the heart
                    and soul of Parisian cuisine.</p>
                <p>Along the way, we’ll also visit some special food stops that will surprise and delight you, from hidden patisseries to bustling streets foods filled with local treasures.</p>
                <p>We will arrive on Friday for 12:00, we put down our luggages in the hotel and we head to the first restaurant.</p>
            <p><strong>Your only responability is</strong> to come to Paris on Friday on time. From when you reach the
                Hotel, I will be there taking care of you.</p>
            <p>I have designed each day around its own theme, creating a journey that
                not only highlights the diversity of Parisian dining but also helps
                us navigate and fully immerse ourselves in this <strong> french culinary
                adventure together</strong>.</p>
            <p>I’ve chosen to organize our three days around three distinct themes, which are:</p>
            <ul class="text-2xl font-semibold list-disc list-inside font-head">
                <li>Day 1: <span class="text-red-700">Paris Tradition</span><br>
                <p class="font-normal text-lg">Step back in time as we take you to one of most iconic bistrot, where
                    classic French flavors reign supreme.</p></li>
                <li>Day 2: <span class="text-cyan-800">Modern Marvels</span> <br>
                    <p class="font-normal text-lg">Experience the new wave of Parisian cuisine, where bold chefs
                    reinvent tradition with a touch of modernity</p>

                </li>
                <li>Day 3: <span class="text-pink-700">Hidden Gem</span><br>
                <p class="font-normal text-lg">On Sunday something special awaits for you: a Bistrot? Maybe… I will
                    bring you to a restaurant known only to locals, where the chef, a oneof-a-kind person, will lead us through unmarked territory…</p></li>
            </ul>
        </div>

        <div class="p-2  rounded-lg">
            <h3 class=" font-serif text-3xl text-center ">Paris Tradition </h3>
            <p class="font-serif mb-6 text-2xl text-center">Day 1</p>
            <div class="space-y-4 ">
                <p>We will start the day at 12:30 at the Hotel.</p>
                <p>From there we walk towards the quartiere <strong>Garibaldi</strong> where today lies the food zone of
                    Milano.</p>

                <h4 class="font-serif text-2xl text-center">Cucina Meneghina</h4>
                <p>Cucina Meneghina refers to the traditional cuisine of Milan, the capital of the Lombardy region in
                    northern Italy. The term "Meneghina" derives from the Milanese dialect and is often used to describe
                    something distinctly Milanese.</p>
                <p>This cuisine is the most varied in Italy, shaped by its rich history and its neighbors. </p>
                <p>After some antipasti to warm us up we will try the Risotto alla Milanese.</p>
                <p>We will taste <em>Risotto Milanese</em> and other really typical dishes.</p>
                <p> I will bring you to one of the most ancient and most reknown restaurant of the city. With the true
                    italian flavors.</p>

                <img src="https://cdn.chefincamicia.com/images/d72fbbccd9fe64c3a14f85d225a046f4.1920.jpg"
                    alt="Risotto Alla Milanese" class="rounded-lg shadow-lg">
                <p>But don’t be mistaken: <strong>risotto isn’t just “rice with cheese”</strong>.</p>
                <p> It’s a specific variety of rice, cooked al dente, creating a <strong>creamy texture</strong> when
                    combined with butter and cheese. </p>
                <p>A good risotto has a <strong>velvety smooth texture</strong>, where the grains of rice are still
                    distinct, adding both flavor and texture to the dish.</p>
                <p>The risotto is <strong>infused with saffron</strong>, which not only imparts a rich flavor but also
                    gives
                    the dish its iconic golden hue.</p>
                <p>Today, Risotto alla Milanese has become the <strong>culinary symbol of Milan</strong>.</p>
                <p>As with any popular dish, Risotto alla Milanese has its share of imitations. In Milan, you’ll often
                    find
                    overpriced yellow rice passed off as the real thing. </p>
                <p>But do not worry, I carefully selected each restaurant we go, so I can ensure you have the best
                    experience and the most iconic and unaltered food.</p>

                <h4 class="font-serif text-xl">Ossobuco alla Milanese</h4>
                <p> The rice is served with a piece of veal Meat called Ossobuco, on the side of the risotto. </p>
                <p>If you tried the Ossobuco outside of Italy, you haven't tried the real thing, nor anything that comes
                    close. </p>
                <p>You'll experience this dish as it should be: rich, savory, and perfectly complementing the creamy
                    risotto.</p>
                <p>Ossobuco literally means "<i>bone with a hole</i>", referring to a specific cut of veal, with the
                    bone
                    marrow at its center.
                </p>
                <p>This tender, flavorful cut is almost always paired with Risotto, creating the perfect combination of
                    textures and tastes.</p>

                <img src="https://www.carnegenuina.it/cdn/shop/articles/8237371411_2fe18e45dc_o_3744x.jpg?v=1695215056"
                    alt="Ossobuco Alla Milanese" class="rounded-lg shadow-lg">

                <div class="p-2 mx-auto bg-white rounded-lg lg:p-4">
                    <p class="my-4 font-serif text-2xl font-semibold text-center"> Milano Classics</p>
                    <p class="my-4 font-serif text-2xl font-semibold text-center">Menu</p>
                    <div class="max-w-lg pl-4 mx-auto my-1 space-y-3">
                        <p class="font-serif text-lg font-semibold">Antipasti</p>
                        <p>Tagliere di salumi e formaggi <br> <i>Cured Meats and Cheese Platter </i> </p>
                        <p>Sottaceti lombardi <br> <i>Lombard Pickled Vegetables </i> </p>
                        <p>Slinzega valtellinese <br> <i>Valtellina Cold cuts </i> </p>
                        <p>Parmigiana di melanzane <br> <i>Eggplant Parmigiana </i> </p>
                    </div>
                    <div class="max-w-lg pl-4 mx-auto my-8 text-lg space-y-3">
                        <p class="mt-2 font-serif text-xl font-semibold">Piatto Principale</p>
                        <p>Risotto alla Milanese</p>
                        <p>Ossobuco alla Milanese</p>
                    </div>
                    <p>The appetizers may be subject to changes with equivalent dishes, depending on availability.</p>
                </div>


                <p>After the lunch, we will move towards the city center. </p>
                <p>We will explore <b> Piazza del duomo</b> (in the front cover), <b>Galleria Umberto I </b>and
                    <b>Teatro
                        della Scala</b> the opera house of Milano.
                </p>
                <p>Before meeting again for dinner I will bring you to a <b>secret food spot</b>:</p>

                <div class="flex gap-5 p-4 text-white bg-black rounded-lg">
                    <div
                        class="shrink-0 hidden w-24 h-24 font-black text-center text-black bg-white rounded-full text-8xl sm:block">
                        ?
                    </div>
                    <div>
                        <p class="font-serif text-3xl font-semibold">Secret Food Spot</p>
                        <p>Behind the bustling traffic of Piazza del Duomo lies a historic bakery, established in the
                            mid-1800s, renowned for its single, iconic product—a beloved mid-afternoon snack loved and
                            hated
                            by
                            the people of Milan.</p>
                    </div>
                </div>


                <p>We will meet again before dinner to immerse ourselves in the delightful Milanese tradition of
                    <b>Apericena</b>.
                </p>
                <p>This unique Italian dining concept beautifully combines the essence of an aperitivo (a pre-dinner
                    drink
                    with light snacks, aperitif or apero) with the satisfying elements of a light dinner (cena). </p>
                <p><b>Apericena</b> is more than just a meal—it’s a relaxed and social experience, typically enjoyed in
                    the
                    early evening. In April, with the sun setting around 8 PM, this is the perfect time to unwind and
                    savor
                    the flavors of Milan while basking in the warm glow of twilight. </p>
                <p>To make the experience truly special, <b>we’ll enjoy our apericena on a stunning rooftop terrace</b>,
                    offering breathtaking views of Milan’s skyline. </p>
                <img src="https://ih-hotels.com/images/ambasciatori/suneleven/ih-hotels-milano-ambasciatori-terrazza-bar.jpg"
                    alt="Rooftop bar" class="mx-auto rounded-lg shadow-lg">
                <p>It’s the ideal setting to indulge in delicious food, refreshing drinks, and great company, all while
                    soaking in the enchanting atmosphere of this iconic city. </p>
                <h4 class="font-serif text-xl">Want something more?</h4>

                <p>Milano is a city that never truly sleeps— or better sleeps later than Zurich! It’s still lively until
                    2
                    am, especially on weekends.</p>
                <p>While many of the rooftop terraces close around 10 or 11 pm, <b> the day doesn’t have to end
                        there</b>.
                </p>
                <p>
                    If you’re up for it, we can continue the night by heading to a trendy mixology bar or an exclusive
                    venue.</p>
                <p>I will leave this option totally open, but I will ask around if you are interested in some
                    “after-dinner”
                    activities.
                </p>


            </div>
        </div>

        <button onclick="scrollToElement('offer')"
            class="w-full p-4 mx-auto my-8 text-4xl font-semibold text-white border-2 border-green-800 rounded-lg shadow-lg from-green-600 to-green-900 text-serif bg-linear-to-b ">
            I’d like to reserve my spot for Milano! <x-heroicon-o-arrow-right class="inline w-8 h-8 mb-1" />
        </button>

        <hr>
        <div class="px-2 py-2 my-4 space-y-3">
            <h2 class="text-3xl font-semibold font-head">Where is the name of the Restaurant?</h2>
            <p> You might have noticed that I’ve intentionally left out the names of the restaurants for this trip. </p>
            <p><strong> That’s no accident!</strong> I’ve spent weeks carefully planning every detail of this weekend,
                from
                the locations to the menus, and I consider this work my personal “intellectual property.”</p>
            <p><strong> If you join me in Milan</strong>, you’ll receive the full list of locations before we depart,
                don’t
                worry, all the links, the specific menus and so on.</p>
            <p><strong>If you do not come</strong>, I am sorry, but I prefer to keep the itinerary private—it’s part of
                what
                makes this adventure so special.
            <p>That said, you already have the menus, so you know exactly what we’ll be enjoying. </p>
            <p>The food won’t be a surprise, the menus are in these pages. But the settings, the ambiance, and the
                stories
                behind these hidden gems will add a whole new layer to the experience.</p>
            <p>Rest assured, I’ve poured my heart, soul, and organizational expertise into crafting this adventure. </p>
            <p><strong>Trust me</strong>: every moment has been designed to surprise and delight you. This is your
                chance to
                experience Milan in a way few foodies ever do. </p>
            <p class="py-2 text-xl font-semibold text-center">You will not be disappointed! </p>


        </div>
        <hr>
        <div class="px-2 py-2 my-8 rounded-lg bg-amber-100">
            <h3 class="my-6 font-serif text-3xl text-center">Luxury Life (Day 2)</h3>
            <div class="space-y-4 ">
                <p>We will start the day around 11 a.m.</p>
                <p>So you are night owl you can sleep through, or if you are an early bird, you can wake up early and
                    visit the city by yourself!</p>
                <p>We walk through <strong>Brera</strong> and <strong>Castello Sforzesco</strong>. Located on the west
                    side of the city center, this is the most “<em>bohemienne</em>” zone of Milano.</p>
                <p>During the spring days, Milano has fresh winds blowing between the buildings, and sun naturally
                    lightens up the streets of this marvelous city.</p>

                <img src="https://www.maart.mi.it/wp-content/uploads/2021/05/BRERA.jpg"
                    class="mx-auto rounded-lg shadow-xl">

                <h4 class="font-serif text-xl">Saturday Lunch</h4>
                <p>You know how much I am a Pizza Lover. In Milan we have one of the most famous Pizzerie in Italy.</p>
                <p>We have been to Napulé, which for me it is 9 stars out of ten. Here we will try a Pizza that is
                    <strong> 11 stars out of 10</strong>.
                </p>
                <p>The work they do with the toppings is incredible.</p>
                <p>Their Margherita with yellow tomatoes is absolutely out of this world!</p>
                <p>It is one of the best pizzas I have tried, really simple yet amazing. </p>
                <p class="font-semibold">It is a foodie stop you cannot miss.</p>
                <img src="https://www.identitagolose.it/public/images/xmedium/dazero-pizza-fino.jpg" alt="Pizza Da Zero"
                    class="mx-auto rounded-lg shadow-xl lg:w-1/2">

                <h4 class="font-serif text-xl">The Most Iconic View</h4>
                <p>After the lunch I have booked the terraces of the Duomo. </p>
                <p>We will enter inside the church first, to visit the the building and later we will move on the
                    terraces. </p>
                <img src="https://www.duomomilano.it/wp-content/uploads/2024/01/terrazze-duomo-di-milano.jpg"
                    alt="Duomo Terrace" class="mx-auto rounded-lg shadow-xl">
                <p>The view on the terraces is quite unique, and you can see the whole city center walking below you.
                </p>
                <p>After the visit to the Duomo, we will have one last bite at a really famous coffee and pastry shop.
                </p>

                <div class="flex gap-5 p-4 text-white bg-black rounded-lg">
                    <div
                        class="shrink-0 hidden w-24 h-24 font-black text-center text-black bg-white rounded-full text-8xl sm:block">
                        ?
                    </div>
                    <div>
                        <p class="font-serif text-3xl font-semibold">Secret Food Spot</p>
                        <p>Located within the iconic Galleria, right next to its stunning dome, is a famous pastry shop.
                            From the balconies overlooking the Galleria, we can enjoy a selection of delicious pastries
                            and the lively atmosphere.</p>
                    </div>
                </div>
                <p>After this last stop, you are free to remain to this Caffé and chill there or you can visit Milano.
                </p>

                <h4 class="font-serif text-xl">The Fish Where There Is No Sea</h4>
                <p>When you think of Milan, the iconic cathedral, and towering skyscrapers might spring to mind. </p>
                <p>Yet, many are unaware that, <strong>Milan boasts Italy's largest and best-supplied fish
                        market</strong>, located just a couple of kilometers from the city center. </p>
                <p>Each day at the market opens its door at 4 am, and these <strong>treasures of the sea</strong> are
                    ready for the restaurant owners and chefs to bring to their cuisine and start the day.</p>
                <p>The fish that arrives in Milan undergoes rigorous quality control. Veterinarians and laboratories are
                    on-site to ensure that every product meets the highest standards.</p>
                <p class="font-semibold">Milan’s culinary scene is unparalleled, and its fish cuisine is no exception.
                </p>
                <p> <strong>The city attracts the best chefs</strong>, hospitality and culinary talent in Italy. Over
                    the years, this has fostered a vibrant seafood tradition, even in a city so far away from the coast.
                </p>
                <p>The combination of exceptional ingredients and world-class chefs has elevated Milan’s fish cuisine to
                    new heights. </p>
                <p>Milan offers seafood experiences that rival and even outclass those of coastal towns.</p>
                <p>That’s why, during our weekend, I’m selecting one of the finest restaurants for one of our dinners,
                    so we can end the day with delicious, exquisite food.</p>
                <h4 class="font-serif text-xl">Italian Tradition</h4>
                <p>In Italy, it’s customary to start with small dishes of raw, cold, and hot appetizers—bite-sized, much
                    like Spanish tapas—before moving on to a main course such as pasta. </p>
                <p>I will make you try different typical entries of the Italian tradition, from the Rossi di Mazara, the
                    most delicious shrimp of the Mediterrenean, the Octopus and other delicacies.</p>
                <p>One dish I highly recommend is <strong>Pasta con l’Astice, the European lobster</strong>. </p>
                <p>Lobster demand the freshest ingredients to truly shine. In Milan, thanks to the meticulous sourcing
                    at the fish market, you can be assured of unparalleled quality—fresh, never frozen.</p>
                <p>The finest restaurants, take the time to present a perfectly prepared lobster, with the shell opened
                    and the meat beautifully displayed—so you can enjoy the dish without the struggle or mess of
                    handling the shell.</p>
                <p><strong>This is no simple pasta with shrimps</strong>. There is no fish or shellfish that matches the
                    complexity of flavors and aroma found in this dish.</p>

                <div class="p-2 mx-auto bg-white rounded-lg lg:p-4">
                    <p class="my-4 font-serif text-2xl font-semibold text-center"> Sea Dinner</p>
                    <p class="my-4 font-serif text-2xl font-semibold text-center">Menu</p>
                    <div class="max-w-lg pl-4 mx-auto my-1 space-y-3">
                        <p class="font-serif text-lg font-semibold">Antipasti</p>
                        <p>Carpaccio <br> <i>Fish Carpaccio</i> </p>
                        <p>Rossi di Mazara <br> <i>Mazara's red shrimp </i> </p>
                        <p>Polpo alla Luciana <br> <i>Octupus salad</i> </p>
                        <p>Capesante grigliate <br> <i>Grilled scallops </i> </p>
                    </div>
                    <div class="max-w-lg pl-4 mx-auto my-8 text-lg space-y-3">
                        <p class="mt-2 font-serif text-xl font-semibold">Piatto Principale</p>
                        <p>Tagliolini all'astice <em>Pasta with European Lobster</em></p>
                    </div>
                    <p>This menu is <strong>completely unconfirmed</strong>. The chef and the restaurant work only with
                        seasonal ingredients. This draft menu will give you an idea of what we will taste, but the
                        dishes may change due to availability. Some items are still missing from the menu, as the spring
                        menu is not yet ready. The carbonara will be there for sure.</p>
                </div>

            </div>
        </div>

        <div class="px-4 mb-4 space-y-3">

            <h3 class="my-2 text-3xl font-semibold text-center">Drinks are not included</h3>

            <p>All the menus you see here, or any possible variation will be included in the package. </p>
            <p> As a general indication, if I order it, I pay for it, if you order it, you pay for it.</p>
            <p> I will pay for the water and the coperto. In Italy, each restaurant has a “service fee” called coperto.
            </p>
            <p> All drinks, desserts and additions to the menu, will be on your side, if you want them.</p>
            <h4 class="text-2xl font-semibold">Is it possible to make changes in the menu?</h4>
            <p>Yes and no. Most of these menu are agreed or are being agreed with the restaurant, and they are making a
                special package for us.</p>
            <p>If you any allergies or strong dislikes, let me know in advance, we can sort something out together.</p>
            <p>E.g. you don’t eat shrimps and don’t want pasta with astice, let me know and we can change that dish.
            </p>
            <p>Most of antipasti will be shared among the group, therefore those cannot be changed. </p>
            <p>The primo piatto, a pasta or rice main dish, will not be shared. If you tell me in advance, we can get
                you
                something different. </p>
        </div>

        <button onclick="scrollToElement('offer')"
            class="w-full p-4 mx-auto my-8 text-4xl font-semibold text-white border-2 border-green-800 rounded-lg shadow-lg from-green-600 to-green-900 text-serif bg-linear-to-b ">
            I want to book it! <x-heroicon-o-arrow-right class="inline w-8 h-8 mb-1" />
        </button>

        <div class="px-2 py-2 bg-green-100 rounded-lg">
            <h3 class="my-6 font-serif text-3xl text-center">Grand Finale (Day 3)</h3>
            <div class="space-y-4">
                <p>We’ll begin the day around 11:00 am, taking it easy after the eventful experiences of the past two
                    days. With the hotel's checkout conveniently set for 11:00 am.</p>
                <p>Today is designed to be a <strong> more relaxed day</strong>, offering us the chance to savor Milan’s
                    charm one last time. </p>
                <p>We can head out of the Hotel for a last stroll through the streets of Milano, and maybe enjoy a last
                    espresso at a café.</p>
                <p>Or if we want to stop to some shop or boutique for some last shopping before departure.</p>
                <p>We will pass through <em>Corso Como</em>, the foodie center of Milano, where all the famous
                    restaurants are. </p>
                <img src="https://www.in-lombardia.it/sites/default/files/focus/images/771/955/id388_corso-como_milano_01_flickr_angelocesare.jpg"
                    alt="Corso Como" class="mx-auto rounded-lg shadow-lg">

                <p>Our walk will gradually lead us toward our <strong> final culinary stop</strong>.</p>
                <p>Now, it's time to unveil the <em>pièce de résistance</em>: the grand finale for Sunday lunch.</p>
                <p>The restaurant we'll visit is not just a venue; it's a restaurant yes, but the real gem of this place
                    is not simply the food, it is the whole experience that the chef and his team tailor for you.</p>
                <p> This won't be just "another Italian restaurant."</p>
                <p>It opened last year and, even before they opened the doors, they had already gathered 9000
                    reservations.</p>

                <h4 class="font-serif text-2xl font-semibold">The Chef: A Culinary Innovator</h4>
                <p>This chef is not simply another chef or culinary artist, there are many.</p>
                <p>His charisma and enthusiasm will undoubtedly leave an impression, just as his food will.</p>
                <p>I will try to introduce you to him in person during our dinner.</p>
                <p>His passion is contagious, and his storytelling adds a whole new dimension to dining. </p>
                <p class="font-semibold">He doesn't just serve dishes; he presents stories, sometimes even cooking
                    directly at the table for his guests.</p>

                <img src="https://cdn.prod.website-files.com/654117a226e863ccfb523b1d/65b153a290cdda4ce37f918c_Gallery%201.jpg"
                    alt="Tiramisu" class="mx-auto rounded-lg shadow-lg">

                <h4 class="font-serif text-2xl font-semibold">A Seasonal Symphony</h4>
                <p>The restaurant prides itself on using only the finest seasonal ingredients.</p>
                <p>This ensures every dish bursts with freshness and flavor.</p>
                <p>While the exact menu won't be finalized March, when the spring is fully on, I can still guarantee a
                    culinary journey that's worth the anticipation.</p>
                <p>For starters, we'll share a selection of antipasti showcasing the best of the season: chrunchy
                    artichokes, asparagus, and other spring delicacies that promise to surprise your palate.</p>

                <img src="https://lh3.googleusercontent.com/p/AF1QipP9IVfRNBWz01PLn1tH_RkAgVYobhjG73q2TB6u=s1360-w1360-h1020"
                    alt="Dish" class="mx-auto rounded-lg shadow-lg">
                <h4 class="font-serif text-2xl font-semibold">The Star of the Show</h4>
                <p>In central Italy, pasta is the undisputed king of the table, and the chef's take on carbonara is
                    legendary.</p>
                <p>Forget everything you think you know about this dish.
                </p>
                <p>This isn't the overdone version you might associate with cheap imitations. This is the <strong>real
                        deal—crafted with precision, passion, and skills</strong>.
                </p>
                <p>Yes, carbonara has been the subject of many jokes and memes, but trust me: when done right,
                    <strong>it's pure magic</strong>. For once in your life, you'll taste a carbonara that sets the gold
                    standard.
                </p>
                <p>If you think something like: "<em>I don't like pasta with bacon...</em>" this is not what carbonara
                    is...
                </p>
                <p>A real carbonara is the cross point between a good cured meat (guanciale), with a fine ripe sheep
                    cheese and the strength of egg yolks.Carbonara is not pasta with bacon, it is a magical interplay
                    between these 3 ingredients.
                </p>
                <p>This restaurant remains is a <strong>great celebration of Italian contemporary cuisine</strong>. A
                    lot of restaurants claim to merge tradition and innovation, few achieve it as seamlessly as this
                    chef and his team.
                </p>


                <div class="p-2 mx-auto bg-white rounded-lg lg:p-4">
                    <p class="my-4 font-serif text-2xl font-semibold text-center"> Grand Finale</p>
                    <p class="my-4 font-serif text-2xl font-semibold text-center">Menu</p>
                    <div class="max-w-lg pl-4 mx-auto my-1 space-y-3">
                        <p class="font-serif text-lg font-semibold">Antipasti</p>
                        <p>Pizza Croccante con Puntarelle <br> <i>Chrunchy Pizza with Chicory</i> </p>
                        <p>Carciofi alla Giudia <br> <i>Chrunchy Artichokes </i> </p>
                        <p class="select-none blur-sm">Slinzega valtellinese <br> <i>Valtellina Cold cuts </i> </p>
                        <p class="select-none blur-sm">Parmigiana di melanzane <br> <i>Eggplant Parmigiana </i> </p>
                    </div>
                    <div class="max-w-lg pl-4 mx-auto my-8 text-lg space-y-3">
                        <p class="mt-2 font-serif text-xl font-semibold">Piatto Principale</p>
                        <p class="select-none blur-sm">Risotto alla Milanese</p>
                        <p>Carbonara <em>The Real One</em></p>
                    </div>
                    <p>This menu is <strong>completely unconfirmed</strong>. The chef and the restaurant work only with
                        seasonal ingredients. This draft menu will give you an idea of what we will taste, but the
                        dishes may change due to availability. Some items are still missing from the menu, as the spring
                        menu is not yet ready. The carbonara will be there for sure.</p>
                </div>


                <h4 class="text-2xl font-semibold">Goodbye Italia</h4>
                <p>After our final lunch together, we’ll wrap up around 15:30, bringing our Milan adventure to an end.
                </p>
                <p>We will say goodbye and maybe shot one last picture together.</p>
                <p>Whether you choose to linger a bit longer in the city — perhaps with one last espresso or a stroll
                    through the streets — or head straight back to Zurich…</p>
                <p class="font-semibold">I hope Milan stays with you, not just as a place you visited, but as an
                    unforgettable foodie adventure.</p>

            </div>
        </div>

        <div class="px-4 mt-6 space-y-3" id="offer">
            <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">Here is my offer for you</h2>
            <p>Everything we've discussed so far will be yours for...</p>
            <p class="text-center">
                <span class="font-serif text-6xl text-green-900">CHF 987.-</span>
            </p>
            <p>At this price you have:</p>
            <ul class="list-disc list-inside space-y-3">

                <li>
                    One weekend in a ⭐⭐⭐⭐ Hotel in Milano City Center
                </li>
                <li>
                    You will savor 3 exquisite dining experiences at handpicked restaurants to give you a true taste of
                    Milan's finest cuisine
                </li>
                <li>
                    Hidden culinary gems and local favorites that will make your foodie heart sing, and leave you
                    savoring every moment of this unforgettable weekend…
                </li>
            </ul>
            <p class="font-serif text-2xl font-semibold">But the most important thing is… </p>
            <p><strong>You don’t have to worry about anything</strong>, except arriving in Milan on time on Friday.</p>
            <p>All of this for barely 330 CHF per day. </p>

        </div>
        <div class="p-4 mx-auto my-4 space-y-4 rounded-sm space-y w-fit">
            <p class="font-serif text-4xl text-center">ATTENTION!</p>
            <p class="text-3xl text-center">Limited spots available.</p>
            <p class="font-semibold text-center">I don’t have enough rooms for everyone who signed up. </p>
            <p class="font-serif text-2xl font-semibold text-center lg:text-3xl">First Come, First Serve</p>
            <p>The first to contact me will be the first to be able to reserve their seats. </p>
        </div>

        <div class="px-10 py-8 border-2 border-blue-600 rounded-lg space-y-3 bg-blue-50">
            <h2 class="pb-4 text-3xl font-semibold text-center font-head">How to Book</h2>
            <p class="text-2xl font-semibold">Contact me via Whatsapp: <span class="text-xl italic">"Hey, I would like
                    to join Milano!"</span></p>

            <a href="https://wa.me/41787131882?text=Hi%2C%20I%20would%20like%20to%20join%20the%20trip%20to%20Milano!"
                class="block px-10 py-5 mx-auto text-2xl text-center text-white bg-green-500 rounded-full hover:bg-green-600"
                target="_blank">
                <img src="https://www.svgrepo.com/show/106976/whatsapp.svg" alt="Whatsapp logo"
                    class="inline w-10 h-10 mb-1 fill-white" style="filter: invert(1);">
                Contact me on WhatsApp
            </a>
            <p class="text-center text-slate-800">(This button will open my chat)</p>
            <p>Before I finalize the booking, I will contact you to ask you some questions to fine tune your experience.
            </p>
            <p>The first to contact me, will be the first to be recontacted.</p>
        </div>



        <div class="space-y-3">
            <p class="mt-4 font-semibold">Bookings close on 31/01/2025, or earlier if all rooms are taken. </p>
            <p>You have seen how fast my meetups get booked out.</p>
            <p>Delaying your decision means risking missing out on this exclusive experience.</p>
            <h2 class="h2">What if I cannot come?</h2>
            <p>From the day of the booking you have 14 days to think about it.</p>
            <p>If you, for any reason, want to cancel the trip: just send me a text message, and I will send you back
                all
                the money.</p>
            <p>No questions asked.</p>
            <p>After the 14 days I will confirm the restaurants and the hotel. I will pay for the hotel and no refunds
                will
                be accepted.</p>
            <p>Please note that we are unable to offer refunds for late arrivals or if you need to shorten your stay.
            </p>
        </div>
        <div class="mt-12"></div>
    </article>
    </main>
@endsection
