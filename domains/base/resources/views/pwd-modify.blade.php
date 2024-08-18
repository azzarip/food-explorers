@extends('base::layouts.auth')

@php
    $seo = (new SEO(
        title: 'Food Explorers - Reset Password Success',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Login and registration page.',
    ))->markAsNoindex();

@endphp


@section('content')
<div class="mb-10">

    <h1 class="mb-4 text-4xl leading-normal text-center text-black">Update your password</h1>
    <form action="/pwd-modify" method="POST">
        @csrf
    <div class="space-y-4">
    <div>
        <label for="password" class="">New Password:</label>
        <input type="password" id="password" name="password"
        class="w-full p-2 border border-gray-400 rounded-md hover:border-green-600 focus:border-green-600"
        placeholder="Your new password" required aria-label="password" autocomplete="new-password" />
    </div>
    <p>Type your new password! It must be at least 8 characters long.</p>
    <div class="pt-4">
        <button type="submit" class="block w-full max-w-lg py-3 mx-auto text-2xl button-34"> Reset Password
        </button>
    </div>
</div>
</form>

</div>
@endsection
