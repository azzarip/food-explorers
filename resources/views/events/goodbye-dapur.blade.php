@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Goodbye Dapur - Food Explorers',
        description: 'Farewell dinner for Dapur - Indonesian & Plant Based Restaurant in Oerklin. Join us a last dinner together.',
        image: 'https://www.gaultmillau.ch/fp/2048/1152/3236/2158/sites/default/files/dapur.jpg',
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
<div class="float-right mt-4 w-28 lg:mr-12">
    <img src="https://www.dapur-indonesia.ch/wp-content/uploads/2019/06/plantbased-vegan-indonesian-food-zurich.png" alt="Dapur Logo">
    <p class="font-serif text-3xl font-bold text-center text-amber-800">Dapur</p>
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="my-4 font-serif text-4xl font-bold text-center lg:text-5xl">Goodbye Dapur</h1>
    <p class="mt-2 mb-4 text-2xl text-center font-trajan">Tuesday 25. March 2025, 19:00</p>

    <img src="https://www.gaultmillau.ch/fp/2048/1152/3236/2158/sites/default/files/dapur.jpg" alt="Goodbye Dapure Banner" class="w-full rounded-lg shadow-md">
    <p class="max-w-xl mx-auto mt-4 mb-4 font-serif text-2xl font-semibold text-center lg:text-3xl">The Famous <span class="text-amber-700">Indonesian Restaurant</span> Dapur bids farewell</p>
    <p class="font-serif text-xl text-center lg:text-2xl">After 14 Years, the Beloved Plant-Based Indonesian Restaurant
        in Zurich Closes Its Doors! — Join the Food Explorers for One
        Last Dinner Together.</p>
    <div class="mt-4 space-y-4">
        <p>For over a decade, Dapur has been a <strong class="text-purple-600">cherished gem</strong> in Zurich’s culinary scene, serving up bold Indonesian flavors with a deep commitment to authenticity. </p>
        <p>Owners Diane and Rachel, who had embarked on their own journey into <strong>plant-based</strong> living, discovered that the world of vegan cuisine was richer and more exciting than they had ever imagined.</p>
        <p>Jackfruit replaced beef in their rendang, tempeh took center stage in satay skewers, and the depth of <span class="font-semibold text-orange-700">Indonesian flavors</span> remained untouched.</p>
        <p>Dapur has been a beloved part of Zurich’s food scene for over a decade, bringing the bold flavors of Indonesia to the city—first with traditional dishes, then with an <strong>incredible</strong> plant-based twist.</p>
        <p>Sadly, at the end of March, <strong>Dapur will be closing its doors for good</strong>.</p>
        <p>But before that happens, we’re coming together for <strong>one final dinner</strong> to celebrate this amazing restaurant!</p>
        <p>We, Food Explorers, have secured one final table for an exclusive communal dinner on <strong>March 25th</strong>.</p>
        <p>This is your chance to gather with fellow food lovers and celebrate one last night at Dapur.</p>
        <p>We’ll share trays of their iconic dishes, reminisce about the impact this restaurant has had, and give it the send-off it truly deserves.</p>
        <p>Seats are extremely limited, and this is your last chance to experience Dapur before it’s  <strong>gone forever</strong>.</p>
        
    </div>
    
    <h2 class="mt-6 font-serif text-2xl font-semibold text-center lg:text-3xl">Menu</h2>
    <p class="my-4 text-2xl text-center font-trajan text-amber-700">Plant-Based Indonesian Dinner</p>

    <h3 class="my-6 font-serif text-2xl">Starters</h3>
    <ul class="pl-4 space-y-4">
        <li><strong>Krupuk</strong>  
            <br>Light and crispy Indonesian crackers.</li>
        <li><strong>Soto Kuning</strong>  
            <br>A fragrant yellow turmeric soup with glass noodles, mung bean sprouts, and soy curls, offering a comforting and flavorful start.</li>
    </ul>
    <h3 class="my-6 font-serif text-2xl">Main Dishes</h3>
    <ul class="pl-4 space-y-4">

        <li><strong>Rendang Nangka  </strong>
            <p>A slow-cooked jackfruit rendang, simmered for over 5 hours with 21 aromatic spices, delivering deep, rich flavors.</p>
        </li>
        <li><strong>Plant Kecap </strong>
            <p>Tender plant-based “chicken” made from peas, glased in a zesty garlic-soy sauce.</p>
        </li>
        <li><strong>Gado-Gado</strong>
            <p>A warm vegetable salad, with long beans, bean sprouts,  sweetcorn, cabbage, cucumber, potatoes, and fried temph, all coated in
                a rich, hearthy peanut sauce.</p>
        </li>
        <li><strong>Seitan Sindanglaya</strong>
            <p>Crispy seitan strips served with a light, tangy peanut sauce, a perfect balance of crunch and creaminess.</p>
        </li>
        <li><strong>Tumis Terong</strong>
            <p>Eggplant and chickpeas braised in a homemade chili paste and soy sauce, offering a deep, umami-packed flavor.</p>
        </li>
        <li><strong>Tahu Betutu</strong>
            <p>Silky tofu and fresh broccoli gently cooked in a fragrant Balinese turmeric-coconut milk sauce.</p>
        </li>
        <li><strong>Sayur Lodeh</strong>
            <p>A comforting Javanese coconut milk stew with mixed vegetables, jackfruit, and cashew nuts, full of warmth and creaminess.</p>
        </li>
        </ul>
        <h3 class="my-6 font-serif text-2xl">Desserts</h3>
        <ul class="pl-4 space-y-4">
        <li><strong>Bola Pisang</strong>
            <p>A crispy fried banana cake drizzle with a rich chocolate sauce.</p>
        </li>
        <li><strong>Wingko Babat </strong>
            <p>Sticky rice and coconut cake served on a velvety mango cream.</p>
        </li>
        <li><strong>Sorbet </strong>
            <p>A refreshing and fruity sorbet to cleanse the palate and end on a light, cooling note.</p>
        </li>
    </ul>
   
    <div class="px-4 pb-4 mt-4 mb-6 bg-blue-100 border-4 rounded-lg border-sky-700">
        <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
        <p><strong>This means also water</strong> or anything else not written above.</p>
        <p>You will order directly at the restaurant what you want to drink, and <strong>pay for it at the checkout</strong>.</p>
    </div>
    

    <p class="text-2xl font-semibold text-center">🔥 Last few seats available. One Night Only. 🔥</p>

    <div class="mt-6 space-y-4">
        <p>Instead of individual plates, a stunning array of trays will be placed at the center of the table, inviting you to share, savor, and explore together.</p>
    </div>
    <div class="mt-6 space-y-4">
        <h2 class="mt-6 mb-4 font-serif text-2xl font-semibold">How much does it costs?</h2>

        <div class="text-center">
            <p class="font-semibold font-trajan">Exclusive One-Night-Only Menu</p>
            <p class="font-serif text-6xl text-green-900">85.-</p>
        </div>
        <p class="text-2xl font-semibold text-center">The offer is valid until all seats are reserved!</p>
    </div>
 
    <div class="p-2 mt-4 border border-dashed rounded-sm border-amber-800">
        <h2 class="mt-2 mb-4 font-serif text-2xl font-semibold text-center">How to book?</h2>
        <p class="text-2xl text-center">Just TWINT me the <strong>85.-</strong> at +41 78 713 18 82 (Marco), and send me a whatsapp to notify me. </p>
    </div>

    <h2 class="pt-6 mb-4 font-serif text-2xl font-semibold">FAQ</h2>
    
    <h3 class="block mt-4 text-xl font-semibold">Can the dishes be changed?</h3>
    <p>The menu is defined and we cannot change the dishes, nor adjust the prices.</p>
    <p> If there is a dish you don't like, you can skip it and take some more from the others.</p>
    <p>Each dish is served in trays, so there will be more than enough for everyone.</p>
    <p>The portions are quite abundant, don't worry you will not go home hungry.</p>

    <h3 class="block mt-4 text-xl font-semibold">Are the dishes spicy?</h3>
    <p>None of them have spices inside.</p>

    <h3 class="block mt-4 text-xl font-semibold">What if I have an allergy?</h3>
    <p>Please let me know at <a href="mailto:marco.azzari@foodexplorers.ch" class="font-semibold">marco.azzari@foodexplorers.ch</a> if you have any allergies before booking the event.</p>
    <p>The dishes cannot be changed but we can inform you of any allergens.</p>
    
    

    <h3 class="block mt-4 text-xl font-semibold">What if I cannot come?</h3>
    <p>The <strong>deadline</strong> for cancellations and reimbursement is:</p>
    <p class="text-xl font-semibold text-center">Thursday 20 March 2025 at 13:00, Zurich Time</p>
    <p>To cancel, write me message via Whatsapp or at my email. I will transfer you back the total amount.</p>
    <p>Any later from that date, no reimbursement will be issued, and the payment will be considered final.</p>
    <p>In case of cancellation of the event from our side, a full 100% reimbursement will be issued.</p>
    

</article>

@endsection
