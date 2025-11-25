@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Marvelous Milano',
        description: 'Marvelous Milano, Food Explorers Adventure April 2026, from 17-19, with additional 16 of April 2026.',
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
        <p class="font-semibold">I am organizing a special weekend from Friday 17 to Sunday 19 April in Milano.</p>
        <p>During this weekend I will pick the best and most interesting food experiences of Milano.</p>
        
    </div>
    <div class="max-w-md mx-auto">
        <h3 class="font-bold text-center text-2xl lg:text-3xl">Join the Priority List and claim your cashback</h3>
        <p class="my-1">To unlock it just fill the form down here:</p>
        <x-forms::base button="Join the Priority List and claim your cashback">
                <x-forms::field.first_name />
                <x-forms::field.last_name />
                <x-forms::field.email />
                <x-forms::field.phone />
                <x-forms::field.privacy_policy />
        </x-forms::base>
    </div>
    <div class="space-y-4 max-w-xl mx-auto mt-8">
        <h3 class="font-bold">No Stress · No Pressure · No Commitment</h3>
        <p>If you complete the form you’ll be the first to receive the program.</p>
        <p>You will simply receive the program before anyone else.</p>
        <p>Then, you can decide if you want to come or not.</p>
        <p>If you join the adventure with the omakase, the cashback will automatically apply.</p>
        <p>Otherwise, if you will not, nothing happens, no obligations.</p>
        <p>You can claim the cashback until 26. November 2025 at 23:59.</p>
        <p>The cashback can be used only for the 4 day adventure, and expires after 10 days of the opening of the bookings.</p>
        <p><strong>Remember:</strong>we usually are sold out after a couple of days... I will send a whatsapp and a email, but if you want to come, don't wait too long.</p>
    </div>
    <div class="mt-12"></div>
</article>



@endsection