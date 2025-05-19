@extends('azzarip::layouts.1col', ['bg' => '', 'nav' => false])

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
            <p>It will be my greatest care in organizing the most delightful holiday a
                    foodie
                    like you can aspire for</>.</p>
            <p class="font-bold">In this webpage you will find: </p>
            <ul class="space-y-3 text-xl list-disc list-inside">
                <li><strong class="bg-amber-100">Why Petit Paris?</strong> <br> The story and inspiration behind Parisian Bistrots (<a
                        href="#why" class="inline-link">Go →</a>)</li>
                <li><strong class="bg-green-100">Our Adventure</strong><br> The plan and itinerary for our weekend together. (<a href="#plan"
                        class="inline-link">Go →</a>)</li>
                <li><strong class="bg-blue-100">How to Book</strong> <br> How to reserve your seat! (<a href="#offer" class="inline-link">Go
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
                all while uncovering the city’s most enchanting hidden gems.
            </p>

            <p>This isn't just a weekend trip — it's a Parisian fairy tale for food lovers, a culinary adventure where every
                moment is sprinkled with delicious and unforgettable flavors.</p>

            <p>A once-in-a-lifetime experience, an adventure only <strong>a true foodie like you</strong> could dream of.
            </p>

            <img src="https://www.en.astridparisguide.fr/wp-content/uploads/2020/05/cafe-montmartre-800.jpg"
                alt="Paris Montmartre" class="rounded shadow">
            <p>Paris is the European capital of Food, and I say as an Italian! </p>

            <p>Every city in Europe has its own incredible cuisine, each with its own traditions and flavors. But we all
                have to admit: no place has romanticized its connection to food, wine, and love quite like Paris.</p>

            <p><span class="font-semibold font-serif text-blue-800">Petit Paris</span> is more than just a trip: it’s an
                <strong>adventure through the soul of French cuisine</strong>, carefully crafted to bring you to some of the
                most exceptional bistrots and hidden food gems in the city
            </p>

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

            <p>The word <em>Bistrot</em> is used all over Europe to indicate a <strong>small
             restaurant with a few seats, in                     a cozy setting</strong>.</p>
            <img src="@image('cozy_bistrot.webp')" alt="Cozy Bistrot" class="rounded shadow">
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

            <p class="font-semibold text-2xl text-center">What matters most is that the food is simple, flavorful, and deeply satisfying</p>

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

            <h3
                class="font-serif text-3xl font-semibold text-center p-4 bg-red-300 w-fit mx-auto rounded-lg border-black">
                Entrée</h3>
            <p>The entrée is the starter, usually something light but full of character.</p>
            <p>Not to be confused with the American "Entrée" which means main course.</p>
            <p></p>
            <div class="grid grid-cols-2 gap-2">
                <img src="https://www.arts-et-gastronomie.com/wp-content/uploads/2022/12/AEG_L__ERMITAGE_net_00008-600x600.jpg"
                    alt="Entree 1" class="rounded shadow">
                <img src="https://api.ellequebec.com/app/uploads/2020/05/10.-Salade_Pinterest-@femmesdau-.jpg"
                    alt="Entree 2" class="rounded shadow">
            </div>

            <h3 class="font-serif text-3xl font-semibold text-center p-4 border-black w-fit mx-auto rounded-lg">Plat
            </h3>
            <p>Then comes the plat, the main course, where the heart of the bistrot’s
                cooking shines.</p>
            <p> Here you get your meat, your fish or whatever else you ordered.</p>
            <div class="grid grid-cols-2 gap-2">
                <img src="https://www.arts-et-gastronomie.com/wp-content/uploads/2018/07/PLATS_VILLA_FLORENTINE_AEG-6-e1611745724725-600x600.jpg"
                    alt="Plat 1" class="rounded shadow">
                <img src="https://resize.elle.fr/article/var/plain_site/storage/images/elle-a-table/les-dossiers-de-la-redaction/dossier-de-la-redac/menu-gastronomique/88780110-1-fre-FR/Comment-faire-un-menu-gastronomique.jpg"
                    alt="Entree 2" class="rounded shadow">
            </div>

            <h3
                class="font-serif text-3xl font-semibold text-center p-4 bg-sky-200 w-fit mx-auto rounded-lg">
                Dessert</h3>
            <p>Finally, the dessert, which the French treat with just as much respect
                as the rest of the meal. .</p>
            <p> Usually bistrot won’t serve extravagant, modern creations—desserts here are classics, perfected over
                generations.</p>
            <div class="grid lg:grid-cols-2 gap-2">
                <img src="https://res.cloudinary.com/tf-lab/image/upload/restaurant/ea862876-91c0-40fe-aa00-bb3b755b24cf/3b87de63-f764-4dc2-a7ba-178a74511dcd.jpg"
                    alt="Desser 1" class="rounded shadow">
                <img src="https://rians.com/wp-content/uploads/2022/08/Tiramisu-au-Fontainebleau-FSL-brebis-paysage-MJF-expiration-26-07-2027-tous-supports-perimetre-France-min-scaled.jpg"
                    alt="Dessert 2" class="rounded shadow">
            </div>
            <div class="p-4 border-2 border-red-800 rounded-lg">
                <p class="font-serif font-semibold text-2xl text-center ">
                    Desserts are included!
                </p>

                <p>Not only they are included, but they are mandatory. If you don’t
                    have dessert in Paris, I am ashamed of you.</p>
            </div>

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
                <li>Day 1: <span class="text-red-900">Paris Tradition</span><br>
                    <p class="font-normal text-lg my-2">Step back in time as we take you to one of most iconic bistrot,
                        where
                        classic French flavors reign supreme.</p>
                </li>
                <li>Day 2: <span class="text-cyan-900">Modern Paris</span> <br>
                    <p class="font-normal text-lg my-2">Experience the new wave of Parisian cuisine, where bold chefs
                        reinvent tradition with a touch of modernity</p>

                </li>
                <li>Day 3: <span class="text-purple-900">Hidden Gem</span><br>
                    <p class="font-normal text-lg my-2">On Sunday something special awaits for you: a Bistrot? Maybe… I will
                        bring you to a restaurant known only to locals, where the chef, a oneof-a-kind person, will lead us
                        through unmarked territory…</p>
                </li>
            </ul>
        </div>

        <section>
            <h2 class="text-red-900 lg:text-4xl font-serif text-3xl font-semibold font-head text-center mt-4">Paris
                Tradition</h2>
            <p class="text-center text-2xl font-semibold">Friday</p>
            <div class="space-y-3">
                <p>From the moment we step off the train, we’re surrounded by the
                    magical mood of the city, the perfect backdrop for what’s to come.</p>

                <p class="font-semibold">Welcome to the First Bistrot: a step into Parisian Charm</p>

                <p>Close your eyes for a second. Picture this:</p>
                <p>Wooden tables slightly worn by time, soft yellow lighting, the subtle clinking of glasses, the aroma of
                    sizzling butter and the people talking and cheering in front of a glass of wine.</p>
                <p>The door creaks open under a hand-painted sign reading &quot;<em>Bistrot à vin</em>&quot; barely visible,
                    a sort of Chamber of Secrets for only to those who truly know.</p>
                <p>Though the current bistrot was founded in the late &#39;90s, the walls have seen decades of joy,
                    conversation, and culinary devotion. </p>
                <p>It&#39;s not just a place to eat—it’s a <strong>Parisian story told through flavors</strong>.</p>
                <p>One of the <strong>pioneers of the Bistronomie movement</strong> I’ve told you about, this place is pure,
                    honest, and refreshingly unpretentious.</p>
                <p>No fancy flourishes. No showy presentations.</p>
                <p>Just <strong>classic French cuisine made with heart</strong>, crafted daily from what the chef finds
                    fresh at the market.</p>
                <p>With its <strong>vintage decor and intimate setting</strong>, making it a favorite among locals seeking
                    an authentic Parisian dining experience, not contaminated by the touristic traps.</p>
                <p>A simple chalkboard leans against the bar, its handwritten menu revealing only what the chef has chosen
                    for today. </p>
                <p>No long lists, no unnecessary flourishes, just a few carefully curated dishes, crafted from the freshest
                    ingredients of the day.</p>

                <p><strong>Expect dishes that will suprise you,</strong> not for their novelty, not for their overly
                    artistic presentation, but for their essence, and simpleness.</p>
                <p>Describing a place and its culinary style is no easy task, but this bistrot
                    captures the essence of the Bistrot movement like no other.</p>
                <img src="@image('pbert.webp')" alt="Paul Bistrot">
                <p>No unnecessary embellishments, no overcomplicated presentations. </p>
                <p>This is exactly why I chose this place. It <strong>embodies the very spirit</strong> of the Paris I want
                    to show you. To give you a taste of what awaits, here’s a selection of the menu.</p>
                <p>The bistrot has its own, almost never changing, clientele. They also not have a strong "social" presence,
                    so it was really difficult to find high definition pictures of their dishes. </p>
                <p>Here is one of their musts: <strong>bavette d&#39;aloyau au poivre</strong> (steak in pepper sauce).</p>
                <p><img src="@image('peppersteak.jpg')" alt="Main Dish" class="lg:w-1/2 mx-auto rounded-lg shadow-md"></p>
                <p>The restaurant offers always meat or fish selection, and each of them is amazing. It may be worth to go
                    twice or thrice just to savor all their dishes.</p>
                <p>They always source their fish and seafood fresh:</p>
                <p><img src="@image('petit-paris-fish.jpg')" alt="Fish Dish" class="lg:w-1/2 mx-auto rounded-lg shadow-md"></p>
                <h3 id="and-here-is-the-dessert-" class="font-semibold">And here is one of the most delicious dessert:</h3>
                <p><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/06/a5/38/photo8jpg.jpg?w=1000&amp;h=-1&amp;s=1"
                        alt="Dessert" class="lg:w-1/2 mx-auto rounded-lg shadow-md"></p>
                <p>Not just the sweet end to the meal, but a celebration of everything French cuisine stands for.</p>
                <p>The <strong>desserts</strong> are included in the trip and you cannot miss on them!</p>
                <p>That’s the beauty of this place: it’s all about surprise, spontaneity, and the freshest ingredients of
                    the day. </p>
                <p>We will enjoy a meal crafted with the very essence of France.</p>


                <h3 class="text-center text-2xl font-semibold">Strolling through Paris...</h3>
                <p>As the day rolls by, the <strong> whole city of Paris</strong> is ours to explore.</p>
                <p> With our senses still lingering on the flavors of lunch, we step outside and
                    let the rhythm of the streets guide us.</p>
                <p>
                    A walk along the Seine sets the tone. The riverbanks are alive with
                    bookstalls, street musicians, and the everyday rhythm of the city.</p>

                <p>
                    Notre-Dame greets us from the Île de la Cité, standing as a timeless
                    icon, while the surrounding streets invite us to wander, discovering
                    hidden corners and lively cafés.</p>
                <img src="https://img.nh-hotels.net/8yYbq/zyBwAG/original/AdobeStock_100053376.jpg" alt="Notre Dame Photo"
                    class="lg:w-2/3 mx-auto rounded-lg shadow-md">
                <p>
                    <strong>They recently reopened</strong>, so you may enter again this beautiful church,
                    and admire the reconstruction works that have been going for years.
                </p>

                <p>
                    Whether you choose to visit a museum, sip coffee at a café, or discover
                    charming boutiques, <strong>the afternoon is yours to enjoy</strong>.</p>

                <p>For those who love to shop, <strong>le Marais</strong> is a treasure trove of
                    independent boutiques, artisanal chocolatiers, and vintage finds,
                    while Rue Cler offers a feast for the senses with its colorful market
                    stalls brimming with fresh produce, cheeses, and pastries. </p>
                <p>We’ll meet again in the evening for dinner, where we’ll dive
                    deeper into the heart of traditional Parisian food and drink culture.</p>


                <h3 class="text-center text-3xl font-semibold">Bar à Vin</h3>
                <p class="text-center text-2xl">Friday Evening</p>

                <p>On the first day, I want to make you experience Paris in the most traditional way.</p>
                <p>Let me take you <strong>somewhere special</strong>, but still typical. Not just for what’s in the glass,
                    but for what it feels like to be there.</p>
                <p>This evening, we dive into one of Paris’ most beloved rituals: <strong>Bar à Vin</strong>.</p>
                <p>It simply means <em>Wine Bar</em>. </p>
                <p>You might have seen the name before, but this isn’t just a wine bar, as people in other countries mean
                    it.</p>
                <p>At least in Paris, compared to other wines shop. It’s something different.
                    Something beautifully, <strong>unforgettably Parisian</strong>.</p>
                <p>It’s where locals go after work, before dinner, or long into the night.</p>
                <p>It’s not a noisy bar.</p>
                <p>It’s not a restaurant.</p>
                <p>It’s a warm, glowing corner of the city where people go to chat, enjoy their evening, without stress.</p>
                <p>Walls lined with dusty bottles, wooden stools and marble counters, laughter echoing gently under dim
                    lights.</p>
                <p><img src="https://relaisduvin.com/bar-a-vin0.jpg?v=8tyhscaj8hg2v" alt="Bar à Vin"
                        class="rounded-md shadow-md"></p>
                <p>A lot of wines, that you can select directly from the walls. </p>
                <p>The real experience is just talking to the host, and choosing together the wine you may like the most.
                </p>
                <p>All of them accompanied by wooden cutting boards full of cheeses, charcuterie and other typical bites.
                </p>
                <p class="border-2 rounded-lg border-amber-700 p-4 text-center text-xl"> A bar à vin is where you fall in
                    love with the wine, the moment, and the people you’re sharing it with.</p>
                <p>It is actually quite difficult to choose one.</p>
                <p>Every street has a couple of them, and the most famous ones are stormed by tourists that want to live the
                    real Paris, but end up in another trap.</p>
                <p>The Place We&#39;re Going? <strong>It’s a small treasure.</strong></p>
                <p>Not flashy. No signs trying to grab your attention.</p>
                <p>Just a heavy wooden door, a quiet hum inside, and the feeling that you’ve stepped into a locals-only
                    secret.</p>
                <p>Bottles from every corner of France. Wines full of character—bold, delicate, earthy, surprising.</p>
                <p>Each glass tells the story of a vineyard, a region, a way of life.</p>
                <p>And alongside the wine, there are small plates that delight your palate.</p>
                <p><img src="https://charcutbox.fr/wp-content/uploads/2023/02/podborka-prikolnyx-kartinok-52.jpg"
                        alt="Food boards" class="rounded-md shadow-md"></p>
                <p>Some of the bar à vin today evolved into &quot;<em>Bar à Fromage</em>&quot;, where not only wine is
                    served, but the focus is shifted more on the food and the cheese.</p>
                <p>In France, <strong>cheese isn’t just a food</strong>. It’s a ritual, a heritage, almost a form of poetry.
                </p>
                <p>Each region tells its story through its cheeses.</p>
                <p>Cheese is never an afterthought, it’s a centerpiece, meant to be savored slowly, paired with the perfect
                    glass, and shared.</p>
                <h4 class="font-semibold">If you do not drink</h4>
                <p>If you do not drink, a Bar à Vin still offers an <strong>incredible experience</strong>.</p>
                <p>It’s not just about wine, it’s about the atmosphere, the food, and the way Parisians embrace the art of
                    living, <em>la joie de vivre</em>.</p>

            </div>
            <hr class="my-4">

        </section>

        <div class="mt-8 border-b-1 pb-4" id="daniel">
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
<section class="mt-4">
            <h2 class="text-cyan-900 lg:text-4xl font-serif text-3xl font-semibold font-head text-center mt-4">Modern Paris</h2>
            <p class="text-center text-2xl font-semibold">Saturday</p>
            <div class="space-y-3">
                <p>We’ll begin the day around 11:00 am, so if you need to sleep a bit more
you are free to do it, or if you prefer already take your time to visit the
city by yourself.
</p>
<p>Before we start the day I would like to present to you one of the many
delicacies of Paris, the <strong>freshly baked croissants</strong>.
</p>
<p>Paris is full of bakeries, and every morning the city wakes up in the
aroma of butter and yeast.</p>
<p>Each zone of Paris has its own baker, that has won many different
competitions. The city has some boulangeries that are really epic.</p>
<p class="font-semibold">The day cannot start correctly
without the perfect croissant.</p>
<p>There’s something magical about that first bite—crispy on the outside, golden brown, and delicately flaky/</p>

<img src="data:image/jpeg;base64,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" 
alt="Croissants" class="rounded shadow mx-auto block">

<h3 class="font-serif lg:text-4xl text-3xl font-semibold text-center mt-4">A contemporary Bistrot</h3>
<p><strong>The story I have been telling so far has not finished</strong>, and it is still
continually changing.</p>
<p>For decades, the word bistrot evoked a very specific image—a small,
unpretentious restaurant where you could enjoy simple yet hearty
dishes, often accompanied by a glass of wine.</p>
<p>For this day, I want to bring you to discover the “new waves” of the
bistronomie. Yesterday, on Friday we tasted the most classical Bistrot
cuisine. Today for lunch we go to some more <strong>contemporary take of
Bistronomie</strong>.</p>
<p>Nestled in the heart of Paris's 12th arrondissement, in the middle of
the office zone, there is a delightful bistrot that seamlessly blends
traditional French cuisine with a warm, inviting atmosphere.</p>
<p><strong>Walking into the feels like stepping back in time</strong>. The walls are
adorned with murals depicting scenes of old Paris, adding to the
bistro's charm. The friendly and attentive staff further enhance the
dining experience, making guests feel right at home.</p>
<p><strong>But despite the traditional look</strong>, their menu offers something
completely different from the traditional cuisine.</p>
<p class="font-semibold">The menu at is a testament to the richness of French
gastronomy. </p>
<p>With a focus on fresh, seasonal, and locally sourced ingredients, the dishes are both innovative and comforting.</p>
<p>Dishes like the trout crudo with lime, passion fruit, and avocado, or the rich terrine with prunes, highlight the kitchen's balance of
freshness and creative flair.</p>

<img src="@image('eba.webp')" alt="Bistrot 2 Food" class="rounded">
<p>Dishes like the trout crudo with lime, passion fruit, and avocado, or
the rich terrine with prunes, highlight the kitchen's balance of
freshness and creative flair</p>
<p>Mains such as roasted lamb with rocket pesto and walnuts, or griddled
beef with peppers, capers, and cherry tomatoes, offer a harmonious
blend of flavors.</p>
<p class="font-semibold text-2xl text-center py-2">This bistrot offers an amazing French contemporary cuisine
perfectly blended with the tradition.</p>
<p>It is a place where only the Parisians go, probably because outside of
the bustling streets of the city center, and because outside of the usual
guides “The top 10 bistrot of Paris”.</p>
<p>This bistrot offers an authentic Parisian experience like not many
others. The menu changes weekly, and probably even daily, based on
what the fresh market has to offer</p>
<p><strong>The chef masterfully intertwines contemporary flair with
traditional French roots</strong>, offering a modern bistrot experience that
honors classic culinary techniques</p>
<p>I have tried many, many bistrot of Paris. And this place only brings
French cuisine to life in a way I’ve never seen before—each dish feels
like a perfect balance, in its simplicity.</p>

<h3 class="font-serif lg:text-4xl text-3xl font-semibold text-center mt-4 italic"><span class="text-blue-800">NEO</span> Bistrots</h3>
<p>The birth of bistronomie reshaped completely the Parisian dining
scene, shifting the focus from formal fine dining to more accessible,
flavor-driven experiences.</p>
<p class="font-semibold">Fast forward to today, and we see a new trend emerging: the neobistrot.</p>
<p>These modern dining spaces take inspiration from both traditional
bistrot culture and contemporary gastronomy, with fusion elements
taken from other cuisines, outside of France.</p>
<p>Unlike classic fine dining establishments with their white tablecloths
and silver cloches, neo-bistrots embrace a more welcoming
atmosphere.</p>
<p>This means open kitchens, minimalist décor, and an effortless blend
of elegance and informality.</p>
<p>Neo-bistrots are run by chefs who often have experience in Michelinstarred restaurants but choose to cook with greater freedom. Or by
chefs who collected experiences in other countries and decided to
bring this new influxes into their cooking style.</p>
<p>The service is friendly yet professional, the wine list is carefully
curated, and the dishes reflect the chef ’s personal style rather than the
usual recipes.</p>
<p class="text-center text-2xl">Neo-bistrots are not
afraid to break rules.</p>
<p>Some incorporate
global influences, while
others strip dishes
down to their purest
essence. The only
constant is an
obsession with taste
and a commitment to
delivering an
exceptional dining
experience.</p>
<p>In our trip to Paris, you will have the chance to taste one of these
newly opened restaurants.</p>
<p class="font-semibold">The neo-bistrot experience is about savoring food at its finest, without
the barriers of traditions.</p>
<p>It’s a chance to taste newly created flavors, creative dishes, and the
relaxed yet refined atmosphere that defines this new wave of Parisian
gastronomy.</p>
<p>This unforgettable dining experience will be the perfect way to
conclude our adventure through the Parisian bistrot scene on Saturday
evening.</p>
<p>Here is a selection of dishes of one of this neo-bistrot.
</p>
<img src="@image('neob.webp')" alt="Neobistrot" class="rounded">
            </div>
        </section>
<hr class="my-8">
<section class="mt-4">
            <h2 class="text-purple-900 lg:text-4xl font-serif text-3xl font-semibold font-head text-center mt-4">Hidden Gem</h2>
            <p class="text-center text-2xl font-semibold">Sunday</p>
            <div class="space-y-3">
                <p>We’ll begin the day around 11:00 am, taking it easy after the eventful
experiences of the past two days. With the hotel's checkout
conveniently set for 11:00 am.</p>
<p>Today is designed to be <strong>a more relaxed day</strong>, offering us the chance
to savor Paris’ charm one last time.</p>
<p>We can head out of the Hotel for a last stroll through the streets and
boulevard of Paris, and maybe enjoy a last croissant at a boulangerie.</p>
<p>Or if we want to stop to some shop or boutique for some last
shopping before departure.</p>

<p>Now, it's time to unveil the pièce de résistance: the grand finale for Sunday
lunch.</p>
<p>The restaurant we'll visit is not just a venue; it's a restaurant yes, but
the <span class="text-purple-600">real hidden gem</span> of this place is not simply the food, it is the whole experience that the chef and his team tailor for you.</p>
<p>This won't be just "<em>another Bistrot</em>"</p>
<h3 class="font-serif text-2xl lg:text-3xl font-semibold">The Chef: A Culinary Innovator</h3>
<p>This chef is not simply another chef or culinary artist, there are many.
</p>
<p>His restaurant features an open kitchen concept, moving away from
traditional formal settings to create a more relaxed and convivial
atmosphere for his guests</p>
<p>The ambiance—warm, inviting, yet elegant—perfectly complements
his approach to food: welcoming yet profoundly refined.</p>
<p>For food enthusiasts visiting Paris, this is a must-visit destination.</p>
<p>The restaurant offers a weekly-changing tasting menu, ensuring that
every visit presents something new, depending on the best seasonal
ingredients available on the market.</p>
<p>According to glowing reviews from food critics, this is a <strong>soon-to-be
Michelin-starred restaurant</strong>, giving us the unique opportunity to
experience the chef ’s menu before he becomes even more
renowned—and before prices potentially skyrocket to €500 per
dinner!</p>

<h3 class="font-serif text-2xl lg:text-3xl font-semibold">A Seasonal symphony</h3>
<p>The restaurant prides itself on using only the finest seasonal
ingredients. This ensures every dish bursts with freshness and flavor.</p>
<p class="font-semibold">I can still guarantee a culinary journey that's worth the anticipation.
</p>
<div class="border-2 border-amber-600 p-4 rounded-md"><p>Imagine a menu that evolves like the french landscape, shifting with
the crispness of autumn truffles, the delicate sweetness of spring
asparagus, or the deep umami of summer’s ripe tomatoes. Each plate is
a fleeting moment in time, a celebration of what nature has to offer
at its absolute best.</p></div>
<p>The restaurant does not even publish its menu on their own website, as
they are open for daily changes and they can adapt to your preferences.</p>
<p>That’s the magic of this.</p>
<p class="text-2xl lg:text-3xl text-center">You embark on a journey through flavor,
texture, and artistry, one that’s worth every moment of anticipation.</p>
<img src="@image('sota.webp')" alt="Tasting Menu">


 <p class="font-semibold"> You will not be disappointed!</p>
           </div>

            <h3 class="lg:text-3xl text-2xl font-serif font-semibold mt-4">Want something more?</h3>
            <div class="space-y-3">
            <p>Paris is a city that never truly sleeps— or better sleeps later than
Zurich! It’s still lively the whole night, especially on weekends</p>
<p class="font-semibold">While many of the restaurants close around 12 pm, the day doesn’t
have to end there.</p>
<p>If you’re up for it, we can continue the night by heading to a trendy
mixology bar or an exclusive venue.</p>
<p>I will leave this option totally open, but I will ask around if you are
interested in some “after-dinner” activities.</p>
<img src="https://media.cntraveler.com/photos/5a81e9a752e7b4436ff64dc3/16:9/w_2560,c_limit/Le-Syndicat_IMG_8671.jpg" alt="Bar Cocktails" class="shadow rounded">
<hr class="py-4">
<h3 class="font-serif text-2xl lg:text-3xl font-semibold">Where are the name of the restaurants?</h3>
<p>You might have noticed that I’ve intentionally left out the names of the
restaurants for this trip.</p>
<p> I’ve spent weeks carefully planning every detail
of this weekend, from the locations to the menus, and <strong> I consider this
work my personal “intellectual property.”</strong></p>
<p>Rest assured, I’ve poured my heart, soul, and organizational expertise
into crafting this adventure.</p>
<p>Trust me: every moment has been designed to surprise and delight
you. This is your chance to experience this city in a way few foodies
ever do.
 </p>
</div>
</section>


<section class="mb-12">
        <div class="px-4 mt-16 space-y-3" id="offer">
            <h2 class="mt-6 mb-4 font-serif text-3xl lg:text-4xl text-center font-semibold">
                <img src="@image('petit-paris-logo.webp')" alt="Petit Paris">

            </h2>
            <p class="text-2xl text-center font-serif">3. - 5. October 2025</p>
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

            <p><strong>You don’t have to worry about anything</strong>, except arriving in Paris on
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
        
</section>
    </article>
    </main>
@endsection
