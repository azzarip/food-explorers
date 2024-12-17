@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Milano Adventure',
        description: 'Milano Adventure 25. April 2025. Places are limited, book now.',
        robots: 'noindex, nofollow',
    );
@endphp

@section('main')
<div class="flex flex-row items-center justify-between lg:items-start">
<div class="flex flex-row items-center justify-start w-fit">
    <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-32">
        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="mx-auto">
    </div>
    <p class="font-serif text-2xl font-semibold lg:text-4xl">Food Explorers</p>
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="font-serif text-4xl font-semibold text-center">Milano Meraviglia</h1>
    <p class="px-4 py-2 mx-auto mt-4 text-3xl font-semibold text-center text-amber-700 w-fit">Friday 4 - Sunday 6 April 2025 </p>
    <p class="mt-2 text-xl font-semibold text-center font-head">This is my <span class="text-red-800">SPECIAL INVITE</span> to come with me and other Food Explorers to Milan, for a weekend of incredible Food, amazing drinks and unforgettable memories</p>
    <img src="https://media.istockphoto.com/id/1059724614/photo/milan-cathedral-on-sunrise-italy.jpg?s=612x612&w=0&k=20&c=w7dD72xvRNz8SF1bwxNFkgBLzy6QNqXFzgry5WCWsXY=" alt="Milano Picture" class="mx-auto mt-4 rounded-lg shadow-lg">
    
    <div class="mt-24 space-y-4">
        <p class="font-serif text-3xl font-semibold">Dear Food Explorer,</p>
        <p>If you are reading these words, it means you care and like the events I have been organizing in the past years.</p>
        <p>If you are new or you have been here for many years, you know I take great care in giving the best experiences to my guests.</p>
        <p>And I have been cooking up this project for many months.</p>
        <p>Therefore let me get straight to point...</p>
        <p class="font-semibold">I am organizing a special weekend from Friday 25 to Sunday 27 April in Milano.</p>
        <p>During this weekend I will pick the best and most interesting food experiences of Milano.</p>
        <p>I called this adventure:</p>
        <p class="text-2xl font-semibold text-center">Milano Meraviglia</p>
        <p>It means Marvelous Milan, I prefer the Italian title, as my ziel with this weekend is to show you, how Italians live and enjoy food.</p>
        <p><i>Dolce Vita</i> or <i>Bella Vita</i> as many people call it.</p>
        <p>I want to show you the real lifestyle of Milano, not the weird renditions of Zurich restaurants.</p>
        <p>Each day we will do different things and visit restaurants and bars, while in the mean time we will explore the city and its hidden gems.</p>
        <p>It will be my greatest care in <span class="bg-amber-300/50">organizing the most delightful holiday a foodie like you can aspire for</span>.</p>

    </div>
    
    <div class="space-y-4">
    <h2 class="my-6 font-serif text-2xl font-semibold text-center">The Plan</h2>
    <p>We will arrive on Friday around 12pm, we put down our luggages in the hotel and we head to the first restaurant.</p>
    <p>Transportation from and to Zurich will be your only responsability. From when you reach the Hotel, I will be there taking care of you.</p>
    <p>Many don't know, but the most famous food trend in Milano is probably sushi!</p>
    <p>But, I will avoid Japanese restaurants for this trip, even though there are amazing places in Milan!</p>
    <p>To help myself organize better the different days and what to do I split the three days into three different themes:</p>
    <ul class="text-2xl font-semibold list-disc list-inside font-head">
        <li>Day 1: <span class="text-red-700">Milano Classics</span></li>
        <li>Day 2: <span class="text-amber-600">Luxury Life</li>
        <li>Day 3: <span class="text-green-800">Arrivederci Italia</span></li>
    </ul>
    </div>
    <h2 class="my-6 font-serif text-2xl font-semibold text-center">3 Day Menu</h2>

    <div class="py-2 bg-red-100 rounded-lg">
    <h3 class="my-6 font-serif text-2xl text-center ">Milano Classics (Day 1)</h3>
    <ul class="space-y-4 ">
        <p>Cucina Meneghina refers to the traditional cuisine of Milan, the capital of the Lombardy region in northern Italy. The term "Meneghina" derives from the Milanese dialect and is often used to describe something distinctly Milanese.</p>

        <p>There are a lot, and I mean a lot of Italian Restaurants in Milan... </p>
        <p>But just a few offer <strong>Cucina Meneghina</strong>. I have selected and tasted a few of the most important, and I will make you try the original cuisine from Milano.</p>
        <p>We will taste <em>Risotto Milanese</em> and other really typical dishes.</p>
        <p> I will bring you to one of the most ancient and most reknown restaurant of the city. With the true italian flavors.</p>

        <img src="https://www.yesmilano.it/sites/default/files/styles/testata_full/public/articolo/copertina/483/1866/risotto_DP_1280x560.jpg?itok=Jy7Snv9h" alt="Risotto Alla Milanese" class="rounded-lg shadow-lg">
        <li><strong>Tour of the city center</strong>  
            <br>From the restaurant we will head back to the city center. We will walk by the Castello Sforzesco, la Scala (the Opera House), and finally arriving al Duomo.</li>
            <p>We will visit the main Cathedral and </p>
        <li><strong>Aperitivo</strong>  
                <p>After some well deserved free time for the dinner to a bar.</p>
                <br>As every good italian welcomes the Weekend, we will end up in the evening to a cozy bar to have a glass of wine and a small bite. 
                <p>This is what we call aperitivo, but not just chips and olives, but different tasty treats from bakeries, cold cuts and other stuff.</p>
            </li>
        <img src="https://static2-living.corriereobjects.it/wp-content/uploads/2024/07/sachi-milano-terrace-666b55e8625b3.jpg?v=1719945175" alt="Aperitivo" class="rounded-lg shadow-lg">
        <li><strong>Optional: Rooftop Bar</strong>
            <br>For the ones who still have energy we can enjoy a cocktail with the sun setting above the city and the cathedral.
        </li>
    </ul>
    </div>

    <div class="px-2 py-2 my-8 rounded-lg bg-amber-100">    
    <h3 class="my-6 font-serif text-2xl text-center">Luxury Life (Day 2)</h3>
    <ul class="space-y-4 ">
        <p>We will start the day around 11 a.m.</p>
        <p>You can sleep through, or wake up early and visit the city by yourself.</p>
        
        <li><strong>Piazza Gae Aulenti</strong>
        We start our tour in the signature square Piazza Gae Aulenti, where the "Vertial Gardens", the famous skyscrapers are and we will move towards <i>Corso Como</i> where are all the foodie spots.
        And walk along the most central and lively streets of Milano.
        </li>
        <img src="https://living.corriere.it/wp-content/uploads/2020/10/bosco-verticale-milano-012_cBoeri-Studio_ph.Dimitar-Harizanov_Vertical-Forest_DSC8302.jpg" class="mx-auto rounded-lg shadow-xl lg:w-1/2">
        <p>These part of the town is full of different </p>

        <li><strong>Free Time</strong>       
        <p>You will have the afternoon free.</p>
        </li>


        <li>
            <strong>Fish Dinner</strong>
            <br>Many do not know, but Milano has the best fish and seafood selection of all Italy. 
            <br>All the fished products converge to the Milano Fish Market, therefore in the city you can find the best and freshest selection. 
            <strong>I will bring you to taste the most characteristic italian dishes.</strong>
            Italians prefer seafood and shrimps above fish. Most of the menus revolve around seafood more than fish.
            There are some food especially the pasta with Astice (Lobster) has become over the year one of the staples of Italian High End Sea Cuisine.
            <img src="https://d3h1lg3ksw6i6b.cloudfront.net/media/image/2021/07/08/490b92922df3407cb5b91d3122a43579_Pavillon-Ledoyen.jpg" alt="" class="w-3/4 mx-auto my-2 rounded-lg">
            <p>Trust me I know what I am talking about, the restaurants I am picking from are in the top tier of Milan.</p>
            <p>If you are thinking:</p>
            <p class="my-2 text-2xl italic text-center">I tried the lobster but...</p>
            <p>You haven't tried it in these restaurants, trust me.</p>

            <p class="mt-4 text-2xl">P.S.</p>
            <p>You are not forced to eat something you don't want, in most of the restaurant I will choose the menu, if you don't like something, we can swap a dish without too much stress.</p>
        </li>
        <li><strong>Optional: Rooftop Bar</strong>
            <br>We can enjoy a cocktail with the sun setting above the city.
            There are multiple terraces around the city center, where we can enjoy our after dinner time. 
        </li>
    </ul>
    <img src="https://flawless.life/wp-content/uploads/2016/07/radio-rooftop-bar-me-milan-ristorante.jpg" alt="" class="mx-auto rounded-lg shadow-lg ">
    </div>

    <div class="px-2 py-2 bg-green-100 rounded-lg">
    <h3 class="my-6 font-serif text-2xl text-center">Arrivederci Italia (Day 3)</h3>
    <ul class="space-y-4 ">
    <img src="" alt="">
        <li><strong>Free Time and Checkout</strong>
        <p>I will leave you the morning to relax and enjoy the last hours in the city</p>
        <p>Usually checkouts are around 11-12pm, but we will have an hotel with the luggage deposit. So you can free your room and visit the city for the last day.</p>
        
        <li>
        <strong>One last special lunch</strong>
        <p>As the last stop, before the final goodbyes I will bring you to a very well known Chef of Italy. </p>
        <p>I will not reveal is name, because I want to leave some mystery.. </p>
        <p>He cooks the purest italian cuisine and he is quite a trend setter.</p>
        </li>
        <img src="https://pbs.twimg.com/profile_images/978526727604387840/WcWvDE6W_400x400.jpg" class="w-1/2 mx-auto rounded-full shadow-lg lg:w-1/4 ">

        <li>
        <strong>Goodbye</strong>
        <p>After the lunch we will say goodbye and you are free to remain in Milan or travel back home.</p>
        </li>
    </li>
    </ul>
    </div>

    <h3 class="my-6 font-serif text-2xl text-center">Free time!</h3>
    <p>There will be a lot of free time for you to explore the city on your own.</p>
    <p>I outlined a plan for these days, but apart from lunch and dinners you have all the free time for yourself to explore the city and visit what you like the most.</p>
    <p class="font-semibold">Do not worry, you are not stuck with me for 3 days straight.</p>
    <p>Also time is "dilated" in Italy. You will have lunch later and dinner later than in Switzerland.</p>
    <p>You will find you can do more during the morning and afternoon!</p>
    <p>You will have breakfast included in the hotel.</p>

    <p class="my-4 text-2xl text-center">The plan in the details may change but overall this is the outline</p>
    
    <div class="px-4 pb-4 bg-blue-100 border-4 rounded-lg border-sky-700">
        <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
        <p>I will make a package with the hotel, the restaurants, some other threats and other important food stops.</p>
        <p>I will leave the drinks out, to make it fairer for people who don't drink alcohol or drink just a bit.</p>
    </div>
    
    <div class="px-4 rounded-lg">
        <h2 class="my-6 font-serif text-2xl text-center">Hotel</h2>
        <p>To have the greatest experience in Milan we will sleep in one of the hotel of the city center.</p>
        <p>It will be a ⭐⭐⭐⭐ (4-star) Hotel, so I can assure you are well threated and well rested.</p>
        <p>Also we will be close to the Main Station, the Big Financial District of Milan and the city center.</p>
        <p>Everything by walking distance.</p>
        <p>The hotel is not yet decided, but will be in that zone of the city.</p>
        <p>Breakfast will be included.</p>
    </div>



    <div class="px-4 rounded-lg pb-42">
        <h2 class="my-6 font-serif text-2xl text-center">Transportation</h2>
        <p>You will have to take care of the transportation from Zurich to Milan and back.</p>
        <p>My suggestion is the train, but also Flixbus or the Car are vailable alternatives.</p>
        <p>In the city, we will move around by public transport. I will provide you with a ticket for the 3 days.</p>
    </div>


    <div class="px-4 rounded-lg pb-42">
        <h2 class="my-6 font-serif text-2xl text-center">Dress Code</h2>
        <p>Compared to Zurich where the dress codes are more lax.</p>
        <p>You will see extremely elegant people walking in the city center, and in the restaurants we will visit.</p>
        <p>Some restaurant in the list, even ask directly for a "casual elegant" dress code.</p>
        <p>Don't stress it too much, but if you have that dress in the wardrobe, you never have the occasion to wear, maybe this weekend is for you!</p>
    </div>

    <div class="px-4 mt-6">
        <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h2>
        <p>Well I am trying to discuss some discounts there and there.</p>
        <p>The final price is not yet decided. It will be in the range of some hundreds.</p>
        <p>You will have the hotel, the restaurant, the transportation inside the city and also small events included.</p>
        <p>So you can simply relax and enjoy the city.</p>
    </div>

    <div class="h-14"></div>
    <p class="text-xl font-semibold text-center underline underline-offset-4 decoration-4 decoration-green-600">Now you have two choices:</p>

    <div class="px-4 space-y-4">
        <a href="#booking" class="block mt-4 text-xl font-semibold text-center underline"> > Prereserve your seat! < </a>
        <p>Be the first to receive the offer when it is ready.</p>
        <p>And enjoy a dream weekend in Milan, that is uniquely crafted for you as foodie to enjoy.</p>

        <p>
            or wait...
        </p>

        <p>And let other people enjoy the weekend...</p>
    </div>

    <section id="booking" class="px-4 py-4 mt-4 mb-10 bg-white border-2 border-green-700 rounded-lg">
        <h2 class="py-2 text-2xl font-semibold text-center">Fill the form with your details and you will be the first being informed.</h2>
        <div class="max-w-sm mx-auto">
            <x-forms::full-contact action="/milano" button="I would like to be in the waitlist for when the event is ready" />
        </div>
        <p class="pt-2 my-4">It is not binding, nor you have to pay. You will be informed before everyone else.</p>
    </section>

    <p class="mt-12 font-semibold">P.S.</p>
    <p>If there is something you want to suggest, something you don't like or something we can add, please let me know!</p>
    <p>I really value your opinion, write me a message or an email.</p>
    <p>At the end, I am organizing all of this for you.</p>

    <div class="mt-12"></div>
</article>



@endsection