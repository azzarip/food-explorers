@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Køben3 - Food Explorers',
        description: 'September 2026, København. Food Explorers Journey to Copenhagen. From 25 to 27 September 2026.',
        robots: 'noindex, nofollow',
    );
@endphp

@section('body')
<div class="bg-black w-full max-lg:min-h-screen text-white text-center">
    <p class="text-center text-3xl lg:text-4xl mt-2">Thank you!</p>
    <p class="text-amber-400 text-center text-2xl my-1 lg:my-4 lg:text-3xl">You will be soon contacted by me.</p>
    <p class="font-semibold text-right">Marco</p>

</article>



@endsection
