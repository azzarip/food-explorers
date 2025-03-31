@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Milano Adventure',
        description: 'Milano Adventure 4. April 2025. Places are limited, book now.',
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
<article class="wrapper space-y-3">
    <h1 class="font-serif text-4xl font-semibold text-center text-blue-500">Petit Paris</h1>
    <p class="px-4 py-2 mx-auto mt-4 text-3xl font-semibold text-center text-amber-700 w-fit">Friday 3 - Sunday 5 October 2025 </p>
    <p>Thank you it means a lot to me!</p>
    p
    <p class="font-semibold text-right">Marco</p>

</article>



@endsection