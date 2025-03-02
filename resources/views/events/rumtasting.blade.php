@extends('azzarip::layouts.1col', ['nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Rum Tasting',
        description: 'Rum Tasting on the 29. March 2025. Learn to taste Rum in a cruise through the Caribbean. Places are limited, book now.',
        image: image('rum-expedition.webp'),
    );
    
@endphp

@section('main')

<article class="mt-2 mb-10 lg:mt-4 wrapper">
    <p class="mb-4 text-4xl text-center lg:text-5xl font-trajan">Rum Expedition</p>
    <p class="font-serif text-xl font-semibold text-center md:text-3xl lg:text-4xl">A <span class="text-orange-700">Cruise</span> Through the <span class="text-cyan-700">Spirits</span> of the <span class="text-green-700">Caribbean</span></p>
    <div class="mx-auto lg:w-4/5">
        <img src="@image('rum-expedition.webp')" alt="Rum Tasting Banner" class="my-4 rounded shadow-lg lg:block">
    </div>
    <p class="mt-4 mb-6 text-center md:text-xl lg:text-2xl">Join us for an <strong>Exclusive Rum Tasting Experience</strong> designed to Discover new Flavors, Hidden Stories, and a New Passion for Rum!</p>
    <p class="my-4 text-2xl font-bold text-center lg:text-3xl text-amber-800">Saturday 29. March 2025, 19:30</p>

    <div class="mx-auto my-4 lg:w-4/5">
        <x-button :link='durl("/rum-expedition", "book")'>I want to book my spot!</x-button>
    </div>

<div class="mt-8 text-y lg:text-xl">
        <p class="font-serif text-2xl font-semibold">Dear Spirit Lover,</p>

<p>On the 29th of March, we embark on our <strong>Rum Expedition</strong>, an evening dedicated to discovering the fascinating heritage and craftsmanship behind the Caribbean’s most iconic spirit. </p>
<p>We’ll taste a curated lineup of <strong class="text-amber-900">6 different rums</strong>, each with its own story, flavor profile, and Caraibic soul.</p>
<p>For one night only, you and other fellow explorers will <strong class="text-blue-900"> set sail on a legendary cruise to the Caribbeans</strong> — without passport required! </p>
<p><strong>This is not just another tasting</strong>, this is a fully immersive experience where every sip takes you deeper into the history, mystery, and mastery of this spirit.</p>

<h2 class="font-serif text-2xl font-semibold text-center">A Journey through the Caribbean Islands</h2>
<p>Exploring rum means diving into centuries of history and craftsmanship, each bottle offering a glimpse into the cultures and traditions of the islands.</p>
<div>
    <img src="@image('caribbean-map.webp')" alt="Caribbean Map" class="rounded"> 
</div>
<p>What is interesting about Rum is not simply the really humble origin. </p>
<p>But rather, the impressive story, and sensory voyage that Rum brings.</p>
<p class="p-4 border-2 rounded-md border-amber-700">Maybe you know, but Rum is the <strong>distilled spirit</strong> produced from the fermented juice of sugar cane or its melasses.</p>
<p>In the past centuries, the producers of cane sugar started fermenting the left-over from the production and obtained the first proto-rums.</p>
<p>This is why Rum is such a famous product in the Caribbean Islands, even though is produced all over the world.</p>
<p>So these Islands are not only known for the wonderful beaches, but also for their spirit production.</p>
<img src="https://www.princess.com/content/dam/princess-headless/shorex/ports/bridgetown-barbados-sunset.jpg" alt="Caribbean Beaches" class="rounded shadow-md">
<hr class="my-4">
<h3 class="pt-4 pb-2 font-serif text-2xl font-semibold text-center lg:text-3xl">We will visit <span class="text-blue-800">three Islands</span> together</h3>
<h4 class="font-serif text-2xl font-semibold">Barbados</h4>
<img src="https://www.sandals.com/blog/content/images/2020/04/Barbados-Holetown.jpg" alt="Barbados Town" class="float-left max-w-xs rounded shadow-md md:mr-2">
<p>The Barbados Island are considered by many the historians the birthplace of Rum.</p>
<p>Today, Barbadian rum (or Bajan rum) remains a symbol of the island’s rich heritage, enjoyed neat, in classic cocktails, or as part of lively Caribbean celebrations</p>
<p class="font-semibold">Barbados rum is known for their fruity character and the smooth, well-balanced profile, often featuring notes of vanilla, caramel, and oak from aging</p>
<p>Each sip of these rums transport you straight to the sunny beaches of the island.</p>
<h4 class="font-serif text-2xl font-semibold">Jamaica</h4>
<img src="https://www.sandals.com/blog/content/images/2020/01/White-River-Rafting-Jamaica.jpg" alt="Jamaica Wilderness" class="float-right max-w-xs rounded shadow-md md:ml-2">
<p>Jamaica is a land of vibrant culture, wild landscapes, and some of the world’s most distinctive rums. </p>
<p>The island is famous for its bold, full-bodied spirits, often crafted using pot still distillation to create rich, complex flavors.</p>
<p class="font-semibold">The art of Jamaican rum, known for its deep notes of tropical fruit, molasses, and spice.</p>
<p>As you taste Jamaican rum, you can feel the rhythmic beat of reggae drifting through the air, pulling you into the island joyful and wild spirit.</p>


<h4 class="font-serif text-2xl font-semibold">Martinique</h4>
<img src="https://www.villa-prestige-antilles.com/wp-content/uploads/2023/06/martinique-antilles-voyage-1-1.jpg" class="float-left max-w-xs rounded shadow-md md:mr-2">
<p>Martinique may not be as widely known but it is home to some of the most exquisite and unique rums in the world.</p>
<p>With French origins, it's rum-making tradition dating back to the 17th century, the island’s rums are crafted using a technique coming from the Cognac distillates.</p>
<p class="font-semibold">This gives Martinique rum a distinctive, grassy, and herbaceous character, with flavors of fresh sugarcane, citrus, and delicate spices.</p>
<p>A glass of Martinique rum brings the fragrance of tropical flowers and the island’s lush landscapes fill the air, offering a taste of its French Creole heritage. </p>



<p class="p-4 border-2 rounded-md border-amber-700">Each sip of a elegant and modern rum it's a story, a voyage and <strong> a celebration of Caribbean cultures</strong>.</p>
<div class="mx-auto my-4 lg:w-4/5">
    <x-button :link='durl("/rum-expedition", "book")'>I want to book my spot!</x-button>
</div>
 <h2 class="pt-4 font-serif text-2xl font-semibold text-center">The Birth of Modern Rum</h2>


    <p>Rum has been traditionally attached to Pirates.</p>
    <p>Rum has long been associated with pirates, thanks to the romanticized image of swashbucklers like Captain Jack Sparrow, who was never far from a bottle in the famous film series. </p>
    <p>This portrayal, fueled by popular culture, turned rum into a symbol of the Caribbean—wild, adventurous, and untamed.</p>
    <p>Iconic brands like Captain Morgan continue to leverage this Pirate legacy in their branding.</p>
    <p>For many years, rum was relegated to the realm of low-quality spirits, consumed by teenagers seeking an inexpensive way to get drunk.</p>
    <p>But that perception is changing.</p>
    <p class="font-serif text-xl font-semibold text-center">Today's rum has become a symbol of elegance and finess </p>
    <p>Thanks to the work of the many <strong>Master Blenders</strong> and the producers of rum are raising the bar of quality.</p>
    
    <p class="font-serif text-2xl font-semibold text-center">Rum Categories </p>
    <p class="font-semibold">Rum can now be categorized into three distinct types:</p>
    <ul class="space-y-4 list-inside">
        <li class="p-4 border-2 border-orange-800 rounded"><strong class="text-2xl text-orange-800">SHOTTERS</strong>: The shotters are usually really bad distillates, with a lot of off-flavors and bad aromas, extremely difficult to drink, therefore you can only shot them. Hence the name. An example is the typical Rum sold in supermarkets. You should <span class="font-bold text-red-800">AVOID</span> them completely.</li>
        <li class="p-4 border-2 border-green-800 rounded"><strong class="text-2xl text-green-800">MIXERS</strong>: Mixers belong that category of liquers are designed for making delicious cocktails.</li>
        <li class="p-4 border-2 border-[#C8A311] rounded"><strong class="text-2xl text-[#C8A311]">SIPPERS</strong>: Complex, elegant, and full of character, these rums are best enjoyed on their own, allowing you to savor the depth and richness of their flavors.</li>
    </ul>
    <p>In this tasting, we’ll <strong>skip the first category</strong> altogether and focus on the higher-quality rums—those that embody the true craftsmanship of rum-making and offer an experience worth savoring.</p>
    <p>Get ready to discover the elegance of modern rum!</p>
    <div class="mx-auto my-4 lg:w-4/5">
        <x-button :link='durl("/rum-expedition", "book")'>Join the Rum Expedition!</x-button>
    </div>
    <hr class="py-4">
    <h2 class="font-serif text-2xl font-semibold text-center">Rum vs Whiskey?</h2>
    <p>Modern rums are now competing with the finest whiskeys and wines in terms of complexity and depth of flavor.</p>
    <p><strong>Unlike Whiskey</strong>, Rum rum retains the natural caramel notes of sugarcane, offering a smoother and lighter profile thanks to its aging process.</p>
    <p>This makes rum a more approachable and easy-drinking spirit when compared to the often stronger, heavier flavors of Scotch or Irish whiskeys.</p>
    <p>In fact, <strong>Rum is much closer to wine</strong> in "Character" and "Purpose" than to Whiskey.</p>
    <p>Whiskey and Rum are both distilled spirits, but while whiskey is primarily defined by its aging process, with the focus on wood and maturation. </p>
    <p>Rum, on the other hand, places greater emphasis on "terroir"—the unique characteristics of the sugarcane and the environment in which it’s produced—resulting in a spirit that is more attuned to the land and its natural flavors.</p>
    <p>The purpose of this rum tasting is to introduce you to a world of new flavors, new experiences, and perhaps even a new favorite spirit. </p>
    <p class="py-2 font-serif text-2xl font-semibold text-center">Let’s explore the elegance of modern rum together!</p>
    <hr>
    <h2 class="text-3xl font-bold text-center font-trajan">Rum Expedition</h2>
        <p class="my-4 text-xl font-semibold text-center md:text-2xl lg:text-3xl text-amber-800">Saturday 29. March 2025, 19:30</p>
        <p class="font-serif text-3xl font-bold text-center text-green-800"><small class="text-lg">CHF</small> 57.-</p>
        <img src="@image('rum-expedition.webp')" alt="Rum Tasting" class="px-4 rounded">
        <div class="mx-auto my-4 lg:w-4/5">
            <x-button :link='durl("/rum-expedition", "book")'>I want to book my spot!</x-button>
        </div>

    <h2 class="font-serif text-3xl font-semibold">FAQ</h2>
    <p class="font-semibold">How much alcohol is going to be served?</p>
    <p>Each guest will receive six different rums, roughly equivalent to the alcohol content of 2–3 glasses of wine.</p>
    <p>If you'd like to revisit any of the rums, we're happy to offer an extra taste.</p>
    <p class="font-semibold">Will there be food?</p>
    <p>We'll provide a selection of snacks to complement the tasting, including chips, nuts, and other aperitif-style bites.</p>
    <p class="bg-yellow-100">To fully enjoy the experience, we recommend having dinner beforehand.</p>
    <p class="font-semibold"> Can I join if I’m not a rum expert?</p>
    <p>Absolutely! This event is designed for both beginners and rum enthusiasts.</p>
    <p>We will guide you through the tasting, sharing insights about each rum’s origin, flavor profile, and history.</p>
        <p class="font-semibold">How long does the event last?</p>
    <p>The event itself lasts approximately two hours. At 10pm we have to leave the venue.</p>
    <p>Please note: This event is strictly for guests aged 18 and over.</p>
</div>
</article>


@endsection