@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Milano Adventure',
        description: 'Milano Adventure 16-19. April 2026. Places are limited.',
        robots: 'noindex, nofollow',
    );
@endphp

@push('head')
    <script src="https://player.vimeo.com/api/player.js"></script>
@endpush
@section('body')
<div class="bg-black w-full max-lg:min-h-screen text-white text-center">
    <p class="text-center text-3xl lg:text-4xl mt-2">Thank you!</p>
    <p class="text-amber-400 text-center text-2xl my-1 lg:my-4 lg:text-3xl">You are in the Priority List.</p>
    <p>You can watch this video for more details:</p>
    <div class="max-w-xl my-auto mx-auto">
        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/1140405262?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Marvelous Milano 2026"></iframe></div>
    </div>
</div>
    <article class="wrapper space-y-3 mb-4">
    <p class="font-serif text-3xl font-semibold">Dear Food Explorer,</p>
    <p>Thank you for joining the Priority List for the Milano Adventure from 16 to 19 April 2026.</p>
    <p>As promised, by filling the form you have officially unlocked your CHF 76.– Cashback, which will automatically apply to your seat if you decide to join the 4-day adventure in Milano.</p>
    <p>Places are limited, so I will send you the program as soon as possible.</p>
    <p>Remember: you will receive a dedicated email and a Whatsapp Message and from that moment, the countdown of 10 days for using your cashback begins.</p>
    <p>Don't worry, I will keep you updated with everything I am doing, you may receive an email or two with a bit of background, as I finish organizing everything.</p>
    <p>In case of any doubts or something is not clear, feel free to write me!</p>
    <p class="font-semibold text-right">Marco</p>

</article>



@endsection