@extends('base::layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Login',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Login and registration page.',
    );

@endphp


@section('content')
<div x-data="{ 'login': true }" class="pt-4 pb-8 lg:pt-10">
    <section x-show="login">
    <h1 class="text-4xl leading-normal text-center text-black">Food Explorers <br> <span class="pt-2 text-2xl">Login</span>
    </h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="email" class="">Email:</label>
                <input type="email" id="email" name="email"
                    class="w-full p-2 border border-gray-400 rounded-md hover:border-green-600 focus:border-green-600"
                    placeholder="Your email" required aria-label="Email" autocomplete="email" />
            </div>

            <div>
                <label for="password" class="">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 border border-gray-400 rounded-md hover:border-green-600 focus:border-green-600"
                    placeholder="Your password" required aria-label="Password" autocomplete="current-password" />
            </div>

            <div class="pt-4">
                <button type="submit" class="block w-full max-w-lg py-3 mx-auto text-2xl button-34"> Log In
                </button>
            </div>
        </div>
    </form>
    <p class="mt-4 text-center underline cursor-pointer" @click="login = false">Forgot password?</p>

    <div class="mt-8">
        <p class="mb-1 text-xl">Are you new and want to be part of the community?</p>
        <a href="/register"
            class="block w-full max-w-lg py-3 mx-auto text-2xl text-center border-4 border-green-600 rounded-full hover:bg-green-600 hover:text-white">
            Become a Food Explorer <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
        </a>
    </div>
</section>

<section x-show="!login" x-cloak>
    <h1 class="text-4xl leading-normal text-center text-black">Reset Password</span>
    </h1>
    <form action="/pwd-reset" method="POST">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="email" class="">Email:</label>
                <input type="text" id="email" name="email"
                    class="w-full p-2 border border-gray-400 rounded-md hover:border-green-600 focus:border-green-600"
                    placeholder="Your email" aria-label="Email" autocomplete="email" />
            </div>
            <p>Type in your email, if it is included in our database, you will receive an email to reset your password.</p>
            <div class="pt-4">
                <button type="submit" class="block w-full max-w-lg py-3 mx-auto text-2xl button-34"> Reset Password
                </button>
            </div>
        </div>
    </form>
    <p class="mt-4 text-center underline cursor-pointer" @click="login = true">Back to Login</p>

    <div class="mt-8">
        <p class="mb-1 text-xl">Are you new and want to be part of the community?</p>
        <a href="/register"
            class="block w-full max-w-lg py-3 mx-auto text-2xl text-center border-4 border-green-600 rounded-full hover:bg-green-600 hover:text-white">
            Become a Food Explorer <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
        </a>
    </div>
</section>
</div>
@endsection
