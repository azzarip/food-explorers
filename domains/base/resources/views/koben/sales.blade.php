@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50/50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Køben3 - Food Explorers',
        description: 'September 2026, København. Food Explorers Journey to Copenhagen. From 25 to 27 September 2026.',
        robots: 'noindex, nofollow',
    );
@endphp


@section('body')
<main x-data>
<div class="bg-black w-full min-h-screen pb-4 pt-4 flex flex-col justify-around">
    <div>
        <p class="text-2xl lg:text-3xl text-center font-trajan text-white">Køben3</p>
        <h1 class="text-3xl lg:text-4xl text-center font-trajan text-amber-200">Copenhagen 25-27 September 2026</h1>
    </div>
    <div class="max-w-lg mx-auto bg-white border-amber-400 border-2 rounded-lg p-4">
        <x-forms::base button="I am interested in this journey">
            <x-forms::field.first_name />
            <x-forms::field.last_name />
            <x-forms::field.email />
            <x-forms::field.phone />
            <x-forms::field.privacy_policy />

        </x-forms::base>
    </div>
</div>
