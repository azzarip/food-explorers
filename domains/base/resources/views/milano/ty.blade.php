@extends('azzarip::layouts.base', ['bg' => 'bg-black', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Milano Adventure',
        description: 'Milano Adventure 16-19. April 2026. Places are limited.',
        robots: 'noindex, nofollow',
    );
@endphp

@section('body')
<div class="bg-black w-full max-lg:min-h-screen text-white text-center">
    <div class="max-w-xl mx-auto mt-4 space-y-4">

    <p class="text-center text-3xl lg:text-4xl mt-4 font-trajan">Thank you!</p>
    <p class="text-amber-400 text-center text-2xl my-1 lg:my-4 lg:text-3xl">You will be soon contacted by me.</p>
    <p>I will be in touch with you soon.</p>
    <p>We will need 10 minutes together to present to you the possible offers, and answer possible questions you may have.</p>
    <p>I will tailor the Marvelous Milano offer to your needs and preferences.</p>
    <p>Check your Whatsapp and in case you are not available, we can schedule a call at a later time.</p>
    <p>Your queue position will not be affected.</p>
    <p class="font-semibold text-right">Marco</p>
</div>
</div>

@endsection
