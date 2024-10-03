@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@section('main')
<div class="flex flex-row items-center justify-between lg:items-start">
<div class="flex flex-row items-center justify-start w-fit">
    <div class="w-24 p-1 mx-auto mt-4 mb-2 rounded-full lg:w-32">
        <img src="{{ image('logo_sm.webp') }}" alt="Logo Food Explorers" class="mx-auto">
    </div>
    <p class="font-serif text-2xl font-semibold lg:text-4xl">Food Explorers</p>
</div>
<div class="float-right w-32 m-6">
    <img src="https://static.wixstatic.com/media/82d2d6_4800dfcab3c74a20a267d944aeff8122~mv2.jpg/v1/fill/w_517,h_515,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/82d2d6_4800dfcab3c74a20a267d944aeff8122~mv2.jpg" alt="Yu An Logo" class="">
</div>
</div>
<article class="max-w-3xl mx-auto">
    <h1 class="font-serif text-4xl font-semibold text-center">Omakase at Yu-An</h1>
    <p class="mt-2 text-xl text-center">Tuesday 15. October 2024, 19:00</p>

    <p class="py-4 mt-8 text-6xl text-center border-4 border-black rounded-md">Bookings are closed!</p>


            <h2 class="my-6 font-serif text-2xl font-semibold">What is this dinner?</h2>
        
            <div class="space-y-4">
                <p><strong> Omakase お任せ</strong> is a Japanese term that means "<em>I leave it up to you</em>".</p>
                <p>It is a commonly used expression for a menu organized by the chefs of very famous restaurants.</p>
                <p>On <strong>Tuesday 15 October</strong>, the team of the restaurant of Yu An will welcome us on a splendid journey through the Nippon food.
                    Sushi, hot and cold dishes, grilled japanese meat and sake for the bravest!</p>
                <p> <strong>Yu-An</strong>, near Stauffacher, is one of the best Japanese restaurant of Zurich with <strong>4.8 stars on Google Maps</strong> </p>
                <p>The restaurant style is called <strong>Izakaya</strong>, where various dishes are served together on the table to share with other people.</p>
                <p>This is the most popular form of gastronomy in Japan. <strong>It is a very social way to eat and you will have the chance to enjoy a great variety of dishes.</strong></p>
                <p>But let's explore the menu piece by piece:</p>
            </div>
            
            <h2 class="my-6 font-serif text-2xl font-semibold text-center">Menu</h2>
        
            <h3 class="my-6 font-serif text-2xl">Starters - 1. Round</h3>
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
            <h3 class="my-6 font-serif text-2xl">Signature Sushi - 2. Round</h3>
            <ul class="pl-4 space-y-4">
                <li><strong>Sushi Rolls</strong>
                <p>A selection of their signature rolls, we will taste Salmon (<em>Sake</em>), Tuna (<em>Maguro</em>) and Shirmps (<em>Ebi</em>)
                     rolls in different variation. Their sushi is well known in the whole city. </p>
                    <p>We will taste different style of rolls.</p>
                </li>
            </ul>
            <h3 class="my-6 font-serif text-2xl">Hot Dishes - 3. Round</h3>
            <ul class="pl-4 space-y-4">
                <li><strong>Tori Karaage</strong>  
                    <br>Crispy Japanese fried chicken bites, marinated in soy and ginger, served with garlic chili dip.</li>
                <li><strong>Kani Krokke</strong>  
                    <br>Golden crab croquettes with a creamy filling, lightly fried.</li>
            </ul>
            <h3 class="my-6 font-serif text-2xl">The Mains - 4. Round</h3>
            <ul class="pl-4 space-y-4">
                <li><strong>Grilled Yakiniku</strong>  
                    <br>Succulent grilled beef (Ribeye CH) slices, marinated in a savory soy-based sauce, served with vegetables</li>
                <li><strong>Miso-Glazed Nasu Dengaku (Vegi)</strong>  
                    <br>Grilled eggplant with a rich miso glaze, a perfect blend of sweet and savory.</li>
                <li><strong>Buta no Kakuni</strong>  
                    <br>Tender, slow-braised pork belly, served in a flavorful soy garnish.</li>
                <li><strong>Steamed Rice (if requested)</strong>  
                    <br>Light and fluffy, served to accompany your meal just the way you like it.</li>
            </ul>
            <h3 class="my-6 font-serif text-2xl">Dessert - 5. Round</h3>
            <p class="pl-4 mb-4">Dessert is not included, but the staff is available if you would like to order something sweet to finish your meal.</p>
        
        
            
            <div class="px-4 pb-4 bg-blue-100 border-4 rounded-lg border-sky-700">
                <h3 class="my-6 font-serif text-xl text-center">Drinks are not included.</h3>
                <p><strong>This means also water</strong> or anything else not written above.</p>
                <p>You will order directly at the restaurant what you want to drink, and pay for it at the checkout.</p>
            </div>
            <hr>
        
    <h3 class="block mt-12 text-xl font-semibold">The Fine Print Just to Be Totally Clear</h3>
    <ul class="pt-2 mb-4 space-y-4 list-inside">
        <li>All prices are in Swiss Francs and include the MwSt.</li>
        <li>Spots are assigned on a first-come, first-served basis. They may terminate before the deadline.</li>
        <li>The <strong>deadline</strong> for the booking, cancellations and reimbursement is:</li>
        <li class="text-xl font-semibold text-center">Friday 04 October 2024 12:00pm (noon), Zurich Time</li>
        <li>To cancel, write a message via Whatsapp (preferably), or Meetup, the timestamp of the message is the reference. I will twint you back the total amount or cancel the credit cart payment.</li>
        <li class="font-semibold">Changing the RSVP on Meetup will not be considered, since I do not get notified. Please write me.</li>
        <li>Any later from that date, no reimbursement will be issued, and the transaction will be considered final.</li>
        <li>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have to find that person.)</li>
        <li>In case of cancellation of the dinner from my side, a full 100% reimbursement will be issued.</li>
    </ul>
</article>
@endsection