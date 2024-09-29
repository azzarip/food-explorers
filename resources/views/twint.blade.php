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
    <h1 class="mt-4 font-serif text-2xl font-semibold text-center lg:text-4xl">Omakase at Yu-An - Twint</h1>
    <p class="mt-2 text-xl text-center">Tuesday 15. October 2024, 19:00</p>

    <div class="my-6">
    <p class="text-center">Name: Marco Azzari</p>
    <p class="text-4xl font-semibold text-center">+41787131882</p>
    </div>

<div class="p-4 mt-12 bg-white border-2 border-black rounded-lg">
<p class="text-2xl font-semibold">Instructions:</p>
    <div class="pl-4 mt-4 space-y-4 text-xl">
        <p>1. Twint the given number, 74.- per person.</p>
        <p>2. Send me a message (preferably Whatsapp) with your name, (Meetup Name if different).</p>
        <p>3. I will reply with a confirmation. Done!</p>
    </div>
</div>
<p class="my-4 text-3xl font-semibold text-center">Price: 74.- per Person.</p>
<div class="p-4 my-8 text-xl text-center bg-red-100 border-2 border-red-800 rounded-lg">
    <p>Only less than 10 seats are available! </p>
 </div>

    <p class="my-6">In case of any problems feel free to contact me via Whatsapp, Meetup, Mail (marco.azzari@foodexplorers.ch) or any other means.</p>
    <p class="my-6">If you don't feel like using your phone, you can pay by card here: <a href="https://book.stripe.com/8wM7ttfIT37r6BicMM" rel="nofollow noopener" target="_blank" class="inline-link">Book with Credit Cart</a> (+2.70 fees)</p>
    <h3 class="block mt-6 text-xl font-semibold lg:mt-24">The Fine Print Just to Be Totally Clear</h3>
    <ul class="pt-2 mb-4 space-y-4 list-inside">
        <li>All prices are in Swiss Francs and include the MwSt.</li>
        <li>Spots are assigned on a first-come, first-served basis. They may terminate before the deadline.</li>
        <li>The <strong>deadline</strong> for the booking, cancellations and reimbursement is:</li>
        <li class="text-xl font-semibold text-center">Friday 04 October 2024 12:00pm (noon), Zurich Time</li>
        <li>To cancel, write a message via Whatsapp (preferably), or Meetup, the timestamp of the message is the reference. I will twint you back the total amount or cancel the credit cart payment.</li>
        <li class="font-semibold">Changing the RSVP on Meetup will not be considered, since I do not get notified. Please write me.</li>
        <li>Any later from that date, no reimbursement will be issued, and the transaction will be considered final.</li>
        <li>The participation is not nominative, in case you cannot join, you can give your place to someone else. (You have to find that person)</li>
        <li>In case of cancellation of the dinner from our side, a full 100% reimbursement will be issued.</li>
    </ul>



    <p></p>
</article>



@endsection