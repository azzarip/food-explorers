@extends('layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Become a Restaurant Explorer',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Registration page.',
    );

@endphp

@section('content')
    <div class="pt-4 pb-8 lg:pt-10">
        <p class="text-4xl leading-normal text-center text-black">Food Explorers</p>
        <div>
            <h1 class="mb-2 text-3xl leading-normal text-center text-black">Become a member</h1>

            <form action="{{ route('register') }}" method="POST" id="register_form">
                @csrf
                <div class="space-y-4">
                    @error('user')
                        <p class="px-2 py-1 text-black rounded-xl" style="background-color: #fca5a5;">
                            <x-heroicon-o-exclamation-triangle class="inline w-6 aspect-auto" />
                            {{ $message }}</p>
                    @enderror
                    <div>
                        <label for="first_name" class="">First Name:</label>
                        <input type="text" id="first_name" name="first_name"
                            class="w-full p-2 border border-gray-400 rounded-md hover:border-primary focus:border-primary"
                            placeholder="Your First Name" autocomplete="given-name" value="{{ old('first_name') }}" />
                        @error('first_name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="">Last Name:</label>
                        <input type="text" id="last_name" name="last_name"
                            class="w-full p-2 border border-gray-400 rounded-md hover:border-primary focus:border-primary"
                            placeholder="Your Last Name" autocomplete="family-name" value="{{ old('last_name') }}" />
                        @error('last_name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>



                    <div>
                        <label for="email" class="">Email:</label>
                        <input type="text" id="email" name="email"
                            class="w-full p-2 border border-gray-400 rounded-md hover:border-primary focus:border-primary"
                            placeholder="@lang('teavel::auth.email.placeholder')" autocomplete="email" value="{{ old('email') }}" />
                        @error('email')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div id='phone_field'>
                        <label for="tel" class="block">Phone:</label>
                        <input type="tel" name="tel" id="tel"
                            class="w-full p-2 border border-gray-400 rounded-md hover:border-primary focus:border-primary"
                            value="{{ old('tel') }}" autocomplete="tel-national">
                        {{-- <input type="hidden" name="country_code" id="country_code" value="{{ old('country_code') ?? 'ch' }}" /> --}}

                        @error('phone')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <label for="password" class="">Password:</label>
                        <input type="password" id="password" name="password"
                            class="w-full p-2 border border-gray-400 rounded-md hover:border-primary focus:border-primary"
                            placeholder="@lang('teavel::auth.password.placeholder')" autocomplete="new-password" />
                        @error('password')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-1">
                        @error('privacy')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        <input type="checkbox" name="privacy_policy" id="privacy_policy" @checked(old('privacy_policy'))>
                        <label for="privacy_policy" class="pl-2 text-sm">I accept the <a href="/privacy-policy"
                                class="inline-link">Privacy Policy</a>.</label>
                    </div>

                    <div>

                        <div class="pt-4">
                            <button type="submit" class="block w-full max-w-lg px-4 py-3 mx-auto text-2xl big-button">
                                <span class="leading-relaxed">I want to become a member of the Food Explorers!</span>
                            </button>
                        </div>
                    </div>
            </form>
        </div>

        <div class="mt-8">
            <p class="mb-1 text-xl">Are you already a member?</p>
            <a href="{{ route('login') }}"
                class="block w-full max-w-lg py-3 mx-auto text-2xl text-center border-4 border-green-600 rounded-full hover:bg-green-600 hover:text-white">
                Log in here <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
            </a>
        </div>
    </div>
    <script>
        const country_code = document.querySelector("#country_code");

        const input = document.querySelector("#tel");
        const iti = window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.0.1/build/js/utils.js",
            initialCountry: '{{ old('country_code') ?? 'ch' }}', // Use old value or fallback to 'ch'
            hiddenInput: function(telInputName) {
                return {
                    phone: "phone",
                    country: "country_code"
                };
            },
            preferredCountries: ['ch', 'de', 'at', 'it', 'fr'],
        });

        var form = input.closest('form');

        form.addEventListener('submit', function(event) {
            input.setCustomValidity('');

            console.log(iti.getValidationError());
            if (!iti.isValidNumber()) {
                input.setCustomValidity('Ungültige Nummer.');
                event.preventDefault(); // Prevent form submission
                input.reportValidity(); // Show the validity message
            }
        });
    </script>
@endsection
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.0.1/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.0.1/build/js/intlTelInput.min.js"></script>
@endsection
