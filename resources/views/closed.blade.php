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