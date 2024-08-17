@extends('azzarip::layouts.1col', ['bg' => 'bg-background'])

@php
    $seo = new SEO(
        title: 'Food Explorers - Login',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Login and registration page.'
        );

@endphp

@section('main')
<div class="max-w-3xl mx-auto bg-white border-green-600 rounded-2xl border-y-8">
    <div class="py-10 mt-10">
    <h1 class="text-4xl text-center text-black">Food Explorers <br> <span class="text-3xl">Login</span></h1>
    <form action="{{ route('login') }}" method="POST" >
    @csrf
    <div class="max-w-lg px-2 mx-auto mt-6 space-y-4">
    <div>
        <label for="email" class="">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            class="w-full p-3 border border-gray-400 rounded-md hover:border-green-600 focus:border-green-600"
            placeholder="Your email"
            required
            aria-label="Email"
            autocomplete="email"
        />
    </div>

    <!-- Password Input -->
    <div>
        <label for="password" class="">Password:</label>
        <input
            type="password"
            id="password"
            name="password"
            class="w-full p-3 border border-gray-300 rounded-md"
            placeholder="Your password"
            required
            aria-label="Password"
            autocomplete="current-password"
        />
    </div>

<div class="pt-8">
    <button
        type="submit"
        class="block w-full max-w-lg py-4 mx-auto text-2xl button-34"> Log In
    </button>
</div>
</div>
    </form>
    </div>
</div>
@endsection
