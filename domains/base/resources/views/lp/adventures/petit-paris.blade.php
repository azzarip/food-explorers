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
                <li><strong>Why Petit Paris?</strong> <br> The story and inspiration behind Parisian Bistrots (<a
                        href="#why" class="inline-link">Go →</a>)</li>
                <li><strong>Our Adventure</strong><br> The plan and itinerary for our weekend together. (<a href="#plan"
                        class="inline-link">Go →</a>)</li>
                <li><strong>How to Book</strong> <br> How to reserve your seat! (<a href="#offer" class="inline-link">Go
                        →</a>)</li>
            </ul>
            <p>So, brush up your french dictionary as in October we go to Paris!</p>
        </div>

        <div class="space-y-4 pt-2" id="why">
            <h2 class="my-6 font-serif text-2xl lg:text-3xl font-semibold text-center">Why Petit Paris?</h2>
            <p>Imagine strolling down cobblestone streets, where the scent of freshly baked croissants drifts through the
                air, and the warm glow of the vintage streets guides your way.</p>

            <p>The sound of a lively accordion echoes from a charming café, and just ahead, a hidden bistrot awaits—where
                the secrets of French cuisine unfold like magic.</p>

            <p>Welcome to <span class="font-serif font-semibold">Petit Paris</span>, a foodie adventure through parisian
                bistrots,
                where you don’t just visit Paris: you live it, taste it, and feel its
                romantic soul through every dish.</p>

            <p>Each day we’ll savor a variety of dishes, with <strong> unforgettable restaurants</strong> and visit
                <strong>hidden bars</strong>, and discover local food treasures,
                all while uncovering the city’s most enchanting hidden gems.</p>

            <p>This isn't just a weekend trip — it's a Parisian fairy tale for food lovers, a culinary adventure where every
                moment is sprinkled with delicious and unforgettable flavors.</p>

            <p>A once-in-a-lifetime experience, an adventure only <strong>a true foodie like you</strong> could dream of.
            </p>

            <p>Paris is the European capital of Food, and I say as an Italian! </p>

            <p>Every city in Europe has its own incredible cuisine, each with its own traditions and flavors. But we all
                have to admit: no place has romanticized its connection to food, wine, and love quite like Paris.</p>

            <p><span class="font-semibold font-serif text-blue-800">Petit Paris</span> is more than just a trip: it’s an
                <strong>adventure through the soul of French cuisine</strong>, carefully crafted to bring you to some of the
                most exceptional bistrots and hidden food gems in the city</p>

            <p class="border-2 border-blue-700 rounded-lg p-4 font-semibold text-xl"><span
                    class="font-semibold font-serif text-blue-800">Petit Paris</span> will be our adventure focused on
                visiting exceptional restaurants carefully chosen to showcase the best of Paris’s finest food scene.</p>

            <p>Each restaurant and stop has been handpicked to showcase the very best of Paris’s rich and diverse food
                scene, giving you a chance to experience its flavors in a way few ever do.</p>
            <p class="font-semibold">Your only <span class="text-amber-800">responsibility</span>? Arrive in Paris on time
                on Friday.</p>

            <p>From the moment you arrive at the hotel, I’ll take care of everything—so you can fully enjoy this
                unforgettable culinary journey without any worries.</p>

            <p>This food adventure to Paris will be your chance to discover the French Cuisine as you never had the chance
                before!</p>

            <p class="font-serif text-xl text-center"> The word "<strong>petit</strong> " means “<em>little</em>” in French.
            </p>

            <p>France, and especially Paris has been the capital of Haute Cuisine.</p>

            <p>The term "<strong>haute cuisine</strong>" doesn't just refer to high-end restaurants but also to the entire
                experience: refined techniques, artful presentations, and
                meticulously structured meals served in exclusive, aristocratic settings.</p>

            <p>Today, this style of dining has been pushed to the extreme by Michelin-starred restaurants.</p>

            <p>In Paris, it’s easy to find places where a <strong>single meal costs hundreds of euros</strong>, lasts five
                hours, and unfolds in an atmosphere of utmost
                formality. But that’s not the Paris I love.</p>

            <p>I called this adventure Petit Paris because I want to help you discover the “smaller” cuisine—less
                aristocratic, but no less delicious or
                important.</p>

            <h2 class="my-6 font-serif text-2xl font-semibold text-center">The Cuisine of Bistrots</h2>

            <p>For the purest french food lovers, also called <strong>Bistronomie</strong>.</p>

            <p>But let's explore together: what is a Bistrot?</p>

            <p>The word <em>Bistrot</em> is used all over Europe to indicate a <strong>small restaurant with a few seats, in
                    a cozy setting</strong>.</p>

            <p>Is it the same in Paris? Yes, but is also something more.</p>

            <p>In France, a bistrot is where people come together to share a meal, a conversation, and a moment of their
                day.</p>

            <p class="p-4 text-xl border-2 border-amber-700 rounded-lg"><strong>It’s not about aristocratic dining or
                    extravagant dishes;</strong> it’s about simplicity,
                quality, and atmosphere. A true bistrot is warm, unpretentious, and
                deeply rooted in daily life.</p>

            <p>The pace is relaxed yet lively, with the comforting clatter of cutlery, the
                low hum of conversations, and the occasional laughter from a nearby
                table.</p>

            <p><strong>Regulars greet the owner by name</strong>, and the waiters move effortlessly between tables closely
                packed between each other.</p>

            <p>Old wooden furniture, small chair and some white tableclothes are the only decorations. Maybe opened bottles
                of wine collected through the years…</p>

            <p class="font-semibold">What matters most is that the food is simple, flavorful, and deeply satisfying</p>

            <p>The menu is often handwritten on a chalkboard, changing daily based on what’s fresh and in season.</p>

            <p>In Paris, a bistrot is a place where life happens. It’s where friends catch up over a glass of wine, where
                colleagues take a long lunch, and where strangers sit side by side at small wooden tables, exchanging a
                polite
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

            <h3 class="font-serif text-3xl font-semibold text-center p-4 bg-red-300 w-fit mx-auto rounded-lg border border-black">Entrée</h3>
            <p>The entrée is the starter, usually something light but full of character.</p>
            <p>Not to be confused with the American "Entrée" which means main course.</p>
            <p></p>

            <h3 class="font-serif text-3xl font-semibold text-center p-4 border border-black w-fit mx-auto rounded-lg">Plat</h3>
            <p>Then comes the plat, the main course, where the heart of the bistrot’s
                cooking shines.</p>
            <p> Here you get your meat, your fish or whatever else you ordered.</p>


            <h3 class="font-serif text-3xl font-semibold text-center p-4 bg-sky-200 w-fit mx-auto rounded-lg border border-black">Dessert</h3>
            <p>Finally, the dessert, which the French treat with just as much respect
                as the rest of the meal. .</p>
            <p> Usually bistrot won’t serve extravagant, modern creations—desserts here are classics, perfected over
                generations.</p>

                <div class="p-4 border-2 border-red-800 rounded-lg">
            <p class="font-serif font-semibold text-2xl text-center ">
                Desserts are included!
            </p>

            <p>Not only they are included, but they are mandatory. If you don’t
                have dessert in Paris, I am ashamed of you.</p></div>

            <p>So in each of the restaurant you will get these three dishes, you will
                choose your own preferred dish from the menu that the restaurant will
                hand in that day.</p>

            <h2 class="my-6 font-serif text-2xl font-semibold text-center underline decoration-4  decoration-blue-700">There
                are no Menus</h2>
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
            <p>In this weekend, <strong>we will explore three different bistrots</strong>, each carefully selected to
                showcase the heart
                and soul of Parisian cuisine.</p>
            <p>Along the way, we’ll also visit some special food stops that will surprise and delight you, from hidden
                patisseries to bustling streets foods filled with local treasures.</p>
            <p>We will arrive on Friday for 12:00, we put down our luggages in the hotel and we head to the first
                restaurant.</p>
            <p><strong>Your only responability is</strong> to come to Paris on Friday on time. From when you reach the
                Hotel, I will be there taking care of you.</p>
            <p>I have designed each day around its own theme, creating a journey that
                not only highlights the diversity of Parisian dining but also helps
                us navigate and fully immerse ourselves in this <strong> french culinary
                    adventure together</strong>.</p>
            <p>I’ve chosen to organize our three days around three distinct themes, which are:</p>
            <ul class="text-2xl font-semibold list-disc list-inside font-head">
                <li>Day 1: <span class="text-red-700">Paris Tradition</span><br>
                    <p class="font-normal text-lg my-2">Step back in time as we take you to one of most iconic bistrot, where
                        classic French flavors reign supreme.</p>
                </li>
                <li>Day 2: <span class="text-cyan-800">Modern Marvels</span> <br>
                    <p class="font-normal text-lg my-2">Experience the new wave of Parisian cuisine, where bold chefs
                        reinvent tradition with a touch of modernity</p>

                </li>
                <li>Day 3: <span class="text-pink-700">Hidden Gem</span><br>
                    <p class="font-normal text-lg my-2">On Sunday something special awaits for you: a Bistrot? Maybe… I will
                        bring you to a restaurant known only to locals, where the chef, a oneof-a-kind person, will lead us
                        through unmarked territory…</p>
                </li>
            </ul>
        </div>

        <section>
            <h2 class="text-red-700 lg:text-4xl font-serif text-3xl font-semibold font-head text-center mt-4">Paris Tradition</h2>
            <p class="text-center text-2xl font-semibold">Friday</p>
            <div class="space-y-3">
                <p>From the moment we step off the train, we’re surrounded by the
                    magical mood of the city, the perfect backdrop for what’s to come.</p>
                
                <p class="font-semibold">Welcome to the First Bistrot: a step into Parisian Charm</p>

                <p>Close your eyes for a second. Picture this:</p>
                <p>Wooden tables slightly worn by time, soft yellow lighting, the subtle clinking of glasses, the aroma of sizzling butter and the people talking and cheering in front of a glass of wine.</p>
                <p>The door creaks open under a hand-painted sign reading &quot;<em>Bistrot à vin</em>&quot; barely visible, a sort of Chamber of Secrets for only to those who truly know.</p>
                <p>Though the current bistrot was founded in the late &#39;90s, the walls have seen decades of joy, conversation, and culinary devotion. </p>
                <p>It&#39;s not just a place to eat—it’s a <strong>Parisian story told through flavors</strong>.</p>
                <p>One of the <strong>pioneers of the Bistronomie movement</strong> I’ve told you about, this place is pure, honest, and refreshingly unpretentious.</p>
                <p>No fancy flourishes. No showy presentations.</p>
                <p>Just <strong>classic French cuisine made with heart</strong>, crafted daily from what the chef finds fresh at the market.</p>
                <p>With its <strong>vintage decor and intimate setting</strong>, making it a favorite among locals seeking an authentic Parisian dining experience, not contaminated by the touristic traps.</p>
                <p>A simple chalkboard leans against the bar, its handwritten menu revealing only what the chef has chosen for today. </p>
                <p>No long lists, no unnecessary flourishes, just a few carefully curated dishes, crafted from the freshest ingredients of the day.</p>

                <p><strong>Expect dishes that will suprise you,</strong> not for their novelty, not for their overly artistic presentation, but for their essence, and simpleness.</p>
                <p>Describing a place and its culinary style is no easy task, but this bistrot
                    captures the essence of the Bistrot movement like no other.</p>
                <p>No unnecessary embellishments, no overcomplicated presentations. </p>
                <p>This is exactly why I chose this place. It <strong>embodies the very spirit</strong>  of the Paris I want to show you. To give you a taste of what awaits, here’s a selection of the menu.</p>
                <p>The bistrot has its own, almost never changing, clientele. They also not have a strong "social" presence, so it was really difficult to find high definition pictures of their dishes.   </p>
                <p>Here is one of their musts: <strong>bavette d&#39;aloyau au poivre</strong> (steak in pepper sauce).</p>
                <p><img src="@image('peppersteak.jpg')" alt="Main Dish" class="lg:w-1/2 mx-auto rounded-lg shadow-md"></p>
                <p>The restaurant offers always meat or fish selection, and each of them is amazing. It may be worth to go twice or thrice just to savor all their dishes.</p>
                <p>They always source their fish and seafood fresh:</p>
                <p><img src="@image('petit-paris-fish.jpg')" alt="Fish Dish" class="lg:w-1/2 mx-auto rounded-lg shadow-md"></p>
                <h3 id="and-here-is-the-dessert-" class="font-semibold">And here is one of the most delicious dessert:</h3>
                <p><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/06/a5/38/photo8jpg.jpg?w=1000&amp;h=-1&amp;s=1" alt="Dessert" class="lg:w-1/2 mx-auto rounded-lg shadow-md"></p>
                <p>Not just the sweet end to the meal, but a celebration of everything French cuisine stands for.</p>
                <p>The <strong>desserts</strong> are included in the trip and you cannot miss on them!</p>
                <p>That’s the beauty of this place: it’s all about surprise, spontaneity, and the freshest ingredients of the day. </p>
                <p>We will enjoy a meal crafted with the very essence of France.</p>
            

                <h3 class="text-center text-2xl font-semibold">Strolling through Paris...</h3>
                    <p>As the day rolls by, the <strong> whole city of Paris</strong> is ours to explore.</p>
                    <p> With                         our senses still lingering on the flavors of lunch, we step outside and
                        let the rhythm of the streets guide us.</p>
                    <p>
                        A walk along the Seine sets the tone. The riverbanks are alive with
                        bookstalls, street musicians, and the everyday rhythm of the city.</p>

                    <p>
                        Notre-Dame greets us from the Île de la Cité, standing as a timeless
                        icon, while the surrounding streets invite us to wander, discovering
                        hidden corners and lively cafés.</p>
                    <img src="https://img.nh-hotels.net/8yYbq/zyBwAG/original/AdobeStock_100053376.jpg" alt="Notre Dame Photo" class="lg:w-2/3 mx-auto rounded-lg shadow-md">
                    <p>
                        <strong>They recently reopened</strong>, so you may enter again this beautiful church,
                        and admire the reconstruction works that have been going for years.</p>

                    <p>
                        Whether you choose to visit a museum, sip coffee at a café, or discover
                        charming boutiques, <strong>the afternoon is yours to enjoy</strong>.</p>

                    <p>For those who love to shop, <strong>le Marais</strong> is a treasure trove of
                        independent boutiques, artisanal chocolatiers, and vintage finds,
                        while Rue Cler offers a feast for the senses with its colorful market
                        stalls brimming with fresh produce, cheeses, and pastries. </p>
                    <p>We’ll meet again in the evening for dinner, where we’ll dive
                        deeper into the heart of traditional Parisian food and drink culture.</p>
                        

                        <h3 class="text-center text-2xl font-semibold">Bar à Vin</h3>
                        <p class="text center text-2xl">Friday Evening</p>

                        <p>On the first day, I want to make you experience Paris in the most traditional way.</p>
<p>Let me take you <strong>somewhere special</strong>, but still typical. Not just for what’s in the glass, but for what it feels like to be there.</p>
<p>This evening, we dive into one of Paris’ most beloved rituals: <strong>Bar à Vin</strong>.</p>
<p>It simply means <em>Wine Bar</em>. </p>
<p>You might have seen the name before, but this isn’t just a wine bar, as people in other countries mean it.</p>
<p>At least in Paris, compared to other wines shop. It’s something different.
Something beautifully, <strong>unforgettably Parisian</strong>.</p>
<p>It’s where locals go after work, before dinner, or long into the night.</p>
<p>It’s not a noisy bar.</p>
<p>It’s not a restaurant.</p>
<p>It’s a warm, glowing corner of the city where people go to chat, enjoy their evening, without stress.</p>
<p>Walls lined with dusty bottles, wooden stools and marble counters, laughter echoing gently under dim lights.</p>
<p><img src="https://relaisduvin.com/bar-a-vin0.jpg?v=8tyhscaj8hg2v" alt="Bar à Vin" class="rounded-md shadow-md"></p>
<p>A lot of wines, that you can select directly from the walls. </p>
<p>The real experience is just talking to the host, and choosing together the wine you may like the most.</p>
<p>All of them accompanied by wooden cutting boards full of cheeses, charcuterie and other typical bites.</p>
<p class="border-2 rounded-lg border-amber-700 p-4 text-center text-xl"> A bar à vin is where you fall in love with the wine, the moment, and the people you’re sharing it with.</p>
<p>It is actually quite difficult to choose one.</p>
<p>Every street has a couple of them, and the most famous ones are stormed by tourists that want to live the real Paris, but end up in another trap.</p>
<p>The Place We&#39;re Going? <strong>It’s a small treasure.</strong></p>
<p>Not flashy. No signs trying to grab your attention.</p>
<p>Just a heavy wooden door, a quiet hum inside, and the feeling that you’ve stepped into a locals-only secret.</p>
<p>Bottles from every corner of France. Wines full of character—bold, delicate, earthy, surprising.</p>
<p>Each glass tells the story of a vineyard, a region, a way of life.</p>
<p>And alongside the wine, there are small plates that delight your palate.</p>
<p><img src="https://scontent-zrh1-1.xx.fbcdn.net/v/t39.30808-6/464817638_8611002505660665_2980272783909710714_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=cc71e4&amp;_nc_ohc=5DfhveW7usMQ7kNvwGzQ_DU&amp;_nc_oc=Adn4JyvgpGbkE9Kx6W-nuhZjFvpnYvA3rwd2GtciaCAy7aUU4YueZ820-ELVh4roO3gQ2tgTI7l5JlpDhmXzzmBf&amp;_nc_zt=23&amp;_nc_ht=scontent-zrh1-1.xx&amp;_nc_gid=fL2dq753SFUQoPKRLTXZlg&amp;oh=00_AfEzPncF56k2nfssZHKlENWrkzUCaWRTRhU6nk2sIIFxnQ&amp;oe=68017280" alt="Food boards" class="rounded-md shadow-md"></p>
<p>Some of the bar à vin today evolved into &quot;<em>Bar à Fromage</em>&quot;, where not only wine is served, but the focus is shifted more on the food and the cheese.</p>
<p>In France, <strong>cheese isn’t just a food</strong>. It’s a ritual, a heritage, almost a form of poetry.</p>
<p>Each region tells its story through its cheeses.</p>
<p>Cheese is never an afterthought, it’s a centerpiece, meant to be savored slowly, paired with the perfect glass, and shared.</p>
<h4 class="font-semibold">If you do not drink</h4>
<p>If you do not drink, a Bar à Vin still offers an <strong>incredible experience</strong>.</p>
<p>It’s not just about wine, it’s about the atmosphere, the food, and the way Parisians embrace the art of living, <em>la joie de vivre</em>.</p>

</div>
<hr class="my-4">

        </section>
        {{-- <div class="p-2 mt-12 rounded-lg">
            <h3 class=" font-serif text-3xl text-center font-semibold">Paris Tradition </h3>
            <p class="font-serif mb-6 text-2xl text-center">Day 1</p>
            <div class="space-y-4 ">
                <p>We will start the day at 12:00 at the Hotel.</p>
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
            I’d like to reserve my spot for Paris! <x-heroicon-o-arrow-right class="inline w-8 h-8 mb-1" />
        </button>

        <hr>
        <div class="px-2 py-2 my-4 space-y-3">
            <h2 class="text-3xl font-semibold font-head">Where is the name of the Restaurant?</h2>
            <p> You might have noticed that I’ve intentionally left out the names of the restaurants for this trip. </p>
            <p><strong> That’s no accident!</strong> I’ve spent weeks carefully planning every detail of this weekend,
                from
                the locations to the menus, and I consider this work my personal “intellectual property.”</p>
            <p><strong> If you join me in Milan</strong>, you’ll receive the full list of locations before we depart,
                don’t worry, all the links, the specific menus and so on.</p>
            <p><strong>If you do not come</strong>, I am sorry, but I prefer to keep the itinerary private—it’s part of
                what
                makes this adventure so special.
            <p>That said, you already have the menus, so you know exactly what we’ll be enjoying. </p>
            <p>The food won’t be a surprise, the menus and photos are in these pages. But the settings, the ambiance, and the
                stories
                behind these hidden gems will add a whole new layer to the experience.</p>
            <p>Rest assured, I’ve poured my heart, soul, and organizational expertise into crafting this adventure. </p>
            <p><strong>Trust me</strong>: every moment has been designed to surprise and delight you. This is your
                chance to
                experience Milan in a way few foodies ever do. </p>
            <p class="py-2 text-xl font-semibold text-center">You will not be disappointed! </p>


        </div>
        <hr>
        <div class="px-2 py-2 my-8">
            <h3 class=" font-serif text-3xl text-center text-cyan-800 font-bold">Modern Marvels </h3>
            <p class="font-serif mb-6 text-2xl text-center">Saturday</p>

            <div class="space-y-4 ">
                <p>We will start the day around 11 a.m.</p>
                <p>So you are night owl you can sleep through, or if you are an early bird, you can wake up early and
                    visit the city by yourself!</p>


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



            </div>
        </div>

        <button onclick="scrollToElement('offer')"
            class="w-full p-4 cursor-pointer mx-auto my-8 text-4xl font-semibold text-white border-2 border-green-800 rounded-lg shadow-lg from-green-600 to-green-900 text-serif bg-linear-to-b ">
            I want to book it! <x-heroicon-o-arrow-right class="inline w-8 h-8 mb-1" />
        </button>

        <div class="px-2 py-2 rounded-lg">
            <h3 class=" font-serif text-3xl text-center text-pink-700">Hidden Gem</h3>
            <p class="font-serif mb-6 text-2xl text-center">Sunday</p>
                <div class="space-y-4">
                <p>We’ll begin the day around 11:00 am, taking it easy after the eventful experiences of the past two
                    days. With the hotel's checkout conveniently set for 11:00 am.</p>
                <p>Today is designed to be a <strong> more relaxed day</strong>, offering us the chance to savor Paris's
                    charm one last time. </p>
                <p>We can head out of the Hotel for a last stroll through the streets of Milano, and maybe enjoy a last
                    croissant at a Boulangerie.</p>
                <p>Or if we want to stop to some shop or boutique for some last shopping before departure.</p>

                <p>Our walk will gradually lead us toward our <strong> final culinary stop</strong>.</p>
                <p>Now, it's time to unveil the <em>pièce de résistance</em>: the grand finale for Sunday lunch.</p>
                <p>The restaurant we'll visit is not just a venue; it's a restaurant yes, but the real gem of this place
                    is not simply the food, it is the whole experience that the chef and his team tailor for you.</p>


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


                <h4 class="text-2xl font-semibold">Au Revoir</h4>
                <p>After our final lunch together, we’ll wrap up around 16:30, bringing our Paris Adventure to an end.
                </p>
                <p>We will say goodbye and maybe shot one last picture together.</p>
                <p>Whether you choose to linger a bit longer in the city — perhaps with one last espresso or a stroll
                    through the streets — or head straight back to Zurich…</p>
                <p class="font-semibold">I hope Paris stays with you, not just as a place you visited, but as an
                    unforgettable foodie adventure.</p>

                </div>
            </div>
 --}}


        <div class="mt-8" id="daniel">
            <h2 class="text-center font-serif text-3xl">The words of someone who was with me in Paris...</h2>

            <div class="mt-4 bg-amber-100 rounded-lg p-4 space-y-3">
                <p>Ehm, what is that?</p>
                <p> When I first heard about this so-called "<em>Bistrot Tour</em>" in Paris, I was skeptical, to say the
                    least.</p>
                <p>Why would I spend a whole weekend hopping from one tiny, noisy restaurant to another?</p>
                <p>French bistros aren’t they just overpriced tourist traps serving the same old french toast? </p>

                <p>The first day, we started with a more traditional restaurant theme.</p>
                <p> Imagine this, small restaurant, tiny old wooden tables, people speaking only French…</p>
                <p>I expected nothing special, but then came the first bite: a perfectly cooked lamb with a sauce so rich
                    and complex. </p>
                <p>The place was packed, the waiters attentive and efficient, the atmosphere full with real Parisians, not a
                    single turist in sight.</p>
                <p>And the waiters and their service was top-notch.</p>
                <p>But what really blew my mind was the dessert. </p>
                <p>You know how you always get this tiramisu or some industrial style cake with some ice cream on the side.
                </p>
                <p class="font-bold">Well, what I got was incredible. </p>
                <p>It was pistachio cream, crème fresh with a sauce of roses and all this topped with crunchy nuts. I can
                    tell you, my senses were amazed for the rest of the day. </p>
                <p> </p>
                <p>Day two: "Neo-Bistrot."</p>
                <p>As a lover of traditional cuisine, I didn’t know what to expect, and I was not really understanding the
                    difference between Bistrots, but when you taste it, you completely understand the difference between the
                    styles. </p>
                <p class="font-bold">This was not pretentious; this was innovation.</p>
                <p>A beef steak paired with a beetroot purée and Korean kimchi that somehow made perfect sense.</p>
                <p> And the bread! </p>
                <p> Can you imagine falling in love with a simple slice of bread?</p>
                <p></p>
                <p>By the third day, we visited the “Hidden Gem”. I had already accepted my fate. </p>
                <p>Bring it on, I thought. And they did. A hidden gem in an alley I would have never found on my own.
                </p>
                <p>An old factory reconverted to a fine dining restaurant.</p>
                <p>We tasted 7 dishes in a perfectly paced lunch, from fresh asparagus smoked in the wood-fired oven of the
                    restaurant, to a “crepe” with sea-hurchins and roasted pidgeon.</p>
                <p>I would have never thought that a street rat could taste so good.</p>
                <p></p>
                <p>I could talk for hours how amazing Paris is.</p>
                <p> I will definitely come back and see what they offer in the autumn.</p>
                <p class="font-bold">This tour? Absolutely worth it. </p>
                <p> If you, like me, think you have seen it all, trust me, you haven’t.</p>
                <p>Book the trip.</p>
                <p>Eat the food.</p>
                <p>Eat the food. And prepare to be amazed.</p>
                <div class="flex flex-row">
                    <img src="@image('danielw.webp')" alt="Daniel Picture" class="w-1/3 lg:w-16">
                    <p class="font-black text-amber-900 text-2xl">Daniel Wehrwein</p>

                </div>


            </div>

        </div>
        <hr class="my-8">
        <div class="px-4 mt-16 space-y-3" id="offer">
            <h2 class="mt-6 mb-4 font-serif text-3xl lg:text-4xl text-center font-semibold">Milano to Paris</h2>
            <p>This October, we’re heading to the most famous food capital in Europe… Paris!</p>
            <p class="font-semibold">Three Days. Endless Flavors. One Unforgettable Experience.</p>
            <p>Each day, we’ll explore a different side of Parisian gastronomy. </p>

            <h3 class="font-serif text-2xl lg:text-3xl font-semibold">What is included?</h3>

            <p class="rounded-lg p-2 text-xl font-semibold text-center bg-amber-900/10">One weekend in a 4 Star Hotel in
                Paris</p>
            <p>For the nights from Friday to Sunday, one room per person in a
                4 Star Hotel in Paris. City Tax included.</p>

            <p class="rounded-lg p-2 text-xl font-semibold text-center bg-cyan-900/10">Entrée + Plat + Dessert for 3
                Bistrots</p>
            <p>You will get the 3 dishes composing the menu of each Bistrot. Dishes
                will be yours to choose from the Menu.</p>

            <p class="rounded-lg p-2 text-xl font-semibold text-center bg-pink-900/10">Bar à Vin - Tasting Boards</p>
            <p>On the Friday evening, the food trays and bites at the Bar à Vin will be
                covered.</p>

            <p class="rounded-lg p-2 text-xl font-semibold text-center bg-red-900/10">Tasting Menu of Sunday Restaurant</p>
            <p>The full course menu for the Sunday restaurant is inlcuded.

            <p>But the most important thing is...</p>
            <p class="p-4 bg-purple-800/20 text-center rounded-lg font-semibold text-2xl">Flawless Foodie Experience</p>

            <p>You don’t have to worry about anything, except arriving in Paris on
                time on Friday.</p>
            <p>
                I will take care of booking all the restaurants, telling you where to go
                and helping you choose the dishes that best fit your experience.
            </p>

            <p>You’ll have the chance to fully immerse yourself in the beauty and
                charm of the city, while I handle all the organization details.</p>


            <h3 class="my-2 text-3xl font-semibold text-center">Drinks are not included</h3>

            <p>All the menus you see here, or any possible variation will be included in the package. </p>
            <p> The bistrots menu and the food ordered by me in the other locations will be included.</p>
            <p> I will pay for the water, coffee and any service fee, if there are any.
            </p>
            <p> All drinks, and additions to the menu, will be on your side, if you want them.</p>


            <h3 class="font-serif text-2xl lg:text-3xl font-semibold">Also not included</h3>
            <p>The transportation from and to Zurich is your responsibility.</p>
            <p>The transportation inside Paris is not covered, you may decide to move
                by bus, metro, taxi or Uber.</p>
            <p>The breakfast in the hotel is not included, but you are free to buy it
                directly in the hotel.</p>


            <p>Everything we've discussed so far will be yours for...</p>
            <p class="text-center">
                <span class="font-serif text-5xl lg:text-6xl text-green-900"><small>CHF</small> 1392.-</span>
            </p>
            <p>The lunches and the dinners and a 4-Star Hotel Room just for you to enjoy Paris. For this price is basically
                a gift. </p>
            <p>I am extremely grateful for you having joined me and other food explorers in our first adventure to Milano.
                ❤️</p>
            <p>If you decide to come with Paris you will keep your Inner Circle status.</p>
            <p>For all the events: no waiting lists, no competition for spots.</p>
            <p class="font-semibold">You’re in first.</p>
            <p class="text-xl p-2 text-center">Also just for you, on top of this exclusive rate I would like to add another
                bonus! 🎁</p>
            <p>For any of the future pre-organized dinners (like Yu-An Omakase, A Fatt, Dapur...) you will have:</p>
            <p class="text-center">
                <span class="font-serif font-bold text-3xl lg:text-4xl text-cyan-900"><small>CHF</small> 70.-</span>
            </p>
            <p>dining credit.</p>
            <p>Consider it my treat for your next dinners! You can use this credit toward any of our upcoming dinners in
                Zurich, making your next food event even more enjoyable.</p>
            <p class="font-semibold text-xl">⌛But there’s a catch... This offer will expire on:</p>
            <p class="text-center text-3xl font-serif">Monday 21. April</p>
            <p>After that date the price will increase and you will lose the additional bonuses.</p>
            <p>Don’t waste this opportunity! </p>

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
                    to join Paris!"</span></p>

            <a href="https://wa.me/41787131882?text=Hi%2C%20I%20would%20like%20to%20join%20the%20adventure%20to%20Paris!"
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
            <p class="mt-4 font-semibold">After that date, I will open the bookings to the whole group.</p>
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
