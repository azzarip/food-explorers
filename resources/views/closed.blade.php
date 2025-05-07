@extends('azzarip::layouts.1col', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(title: 'Closed - Food Explorers');
@endphp
@section('main')

<article class="text-center space-y-4">
    <h1 class="font-semibold font-head text-3xl lg:text-4xl pt-4">Event Closed</h1>
    <p>Thank you for your interest.</p>
    <p>Unfortunately, due to the high request, this event is now closed for registrations.</p>
    <p>If you have any request please contact us.</p>
</article>
@endsection