@extends('azzarip::layouts.base', ['nav' => false, 'bg' => 'bg-gradient-to-b from-rose-50 to-white antialiased'])

@php
    $seo = new SEO(title: 'Unsubscribe - Zurich Wine Compass', description: '', image: '');
@endphp
@section('body')
    <main class="mb-12 ">
        <section class="w-full flex items-start mt-4">
            <div class="mx-auto max-w-3xl px-6">

                <div class="mx-auto mt-6 lg:mt-12 max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4"
                    id="form">
                    <x-forms::base class="mx-auto max-w-lg" name="unsubscribe-form" id="unsubscribe-form">
                        <h1
                            class="text-center text-2xl font-extrabold leading-tight text-gray-900 sm:text-3xl md:text-4xl">
                            Do you really want to unsubscribe from the Zurich Wine Compass?
                        </h1>
                        <input type="hidden" name="key" id="key" value="{{ request()->get('key') }}">
                        <div class="mt-2 gap-2">
                            <button type="submit"
                                class="w-full rounded-xl bg-rose-600 px-6 py-3 text-base cursor-pointer font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200">
                                Yes, unsubscribe!
                            </button>
                            <a href="/" class="w-full rounded-xl px-6 py-3 border border-gray-500 block mt-4 text-center text-gray-500 hover:underline">
                                No! 
                            </a>
                        </div>
                        
                    </x-forms::base>
                </div>

            </div>
        </section>
    </main>
@endsection
