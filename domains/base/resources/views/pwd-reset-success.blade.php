@extends('base::layouts.auth')

@php
    $seo = (new SEO(
        title: 'Food Explorers - Reset Password Success',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Login and registration page.',
    ))->markAsNoindex();

@endphp


@section('content')
<div class="mx-auto w-fit">
    <x-heroicon-o-envelope class="w-24 h-24 text-center text-black" />
</div>

<h1 class="text-4xl leading-normal text-center text-black">Password Reset Sent!</h1>
<p>Check your inbox, or spam folder. The email contains a link to reset your password.</p>
<p>If the email does not arrive probably, you are not registered.</p>
<a href="/register" class="block text-center underline">Click here to register!</a>

@endsection
