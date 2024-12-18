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
<article class="wrapper text-y">
    <h1 class="font-serif text-4xl font-semibold text-center">Milano Meraviglia</h1>
    <p class="px-4 py-2 mx-auto mt-4 text-3xl font-semibold text-center text-amber-700 w-fit">Friday 4 - Sunday 6 April 2025 </p>
    <p>Thank you it means a lot!</p>
    <p>You will soon receive more information about this trip!</p>
    <p>Enjoy your Christmas and see you on January!</p>
    <p>I will send you a couple emails every now and then to keep you informed about the additions or modifications to the plan until is ready!</p>
    <p class="font-semibold text-right">Marco</p>

</article>



@endsection