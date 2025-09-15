@extends('azzarip::layouts.base', ['nav' => false, 'bg' => 'bg-gradient-to-b from-rose-50 to-white antialiased'])

@php
    $seo = new SEO(title: 'Unsubscribe Success', description: '', image: '');
@endphp

@section('body')
    <main class="mb-12 ">
        <section class="w-full flex items-start mt-4">
            <div class="mx-auto max-w-3xl px-6">

                <div class="mx-auto mt-6 lg:mt-12 max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4"
                    >
                        <h1
                            class="text-center text-2xl font-extrabold leading-tight text-gray-900 sm:text-3xl md:text-4xl">
                            You successfully unsubscribed from the Zurich Wine Compass!
                        </h1>
                       
                </div>
                        <p class="mx-auto mt-8 max-w-2xl text-center text-xs text-gray-500">
         <a href="/" class="underline hover:text-gray-700">Return to the homepage</a>.
        </p>
            </div>
        </section>
    </main>
@endsection
