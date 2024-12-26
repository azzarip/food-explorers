@extends('layouts.auth')

@php
    $seo = new SEO(
        title: 'Food Explorers - Become a Restaurant Explorer',
        description: 'Join the Food Explorers and make foodies friends. Restaurants, bars, tastings and food events in Zurich city. Registration page.',
    );
    $seo->markAsNoIndex();
@endphp

@section('content')
    <div class="pt-4 pb-8 lg:pt-10">
        <p class="text-4xl leading-normal text-center text-black">Food Explorers</p>
        <div>
            <h1 class="mb-2 text-3xl leading-normal text-center text-black">Finish your account!</span></h1>

            <x-forms::base :action="route('password')" button="Complete the account!">
                @csrf
                <div class="space-y-4">
                    @error('user')
                    <p class="px-2 py-1 text-black rounded-xl" style="background-color: #fca5a5;"><x-heroicon-o-exclamation-triangle
                        style="display: inline; width: 24px; height: 24px;" />
                        @lang("teavel::auth.$message")</p>
                    @enderror

                    <x-forms::field.email />

                    <x-forms::field.password new=true />

            </x-forms::base >
        </div>

        <div class="mt-8">
            <p class="mb-1 text-xl">Are you already a member?</p>
            <a href="{{ route('login') }}"
                class="block w-full max-w-lg py-3 mx-auto text-2xl text-center border-4 border-yellow-500 rounded-full hover:bg-yellow-500 hover:text-white">
                Log in here <x-heroicon-o-arrow-right class="inline w-6 mb-1 aspect-auto" />
            </a>
        </div>
    </div>
@endsection
