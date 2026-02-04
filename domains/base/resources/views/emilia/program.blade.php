@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Food Explorers - Emilia Adventure',
        description: 'Emilia 19-22 February 2026. Places are limited.',
        robots: 'noindex, nofollow',
    );

    $day = \Carbon\Carbon::parse('2026-02-19')->isPast() ? now()->format('D') : 'Thu';

@endphp
@section('body')
    <article>
        <div x-data="{ activeDay: '{{ $day }}' }"
            class="max-w-xl mx-auto p-6 bg-white rounded-xl shadow-2xl pt-10 px-4 border border-gray-100">

            <div class="flex justify-between space-x-2 mb-8 border-b border-gray-100 pb-6">
                <template x-for="day in ['Thu', 'Fri', 'Sat', 'Sun']">
                    <button @click="activeDay = day"
                        :class="activeDay === day ? 'bg-amber-600 text-black shadow-lg scale-105' :
                            'bg-gray-50 text-gray-400 hover:bg-gray-100'"
                        class="flex-1 py-3 px-2 rounded-md font-semibold transition-all duration-300 uppercase tracking-tighter text-xs"
                        x-text="day">
                    </button>
                </template>
            </div>

            <div class="relative min-h-[200px]">

                <div x-show="activeDay === 'Thu'" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 blur-sm" x-transition:enter-end="opacity-100 blur-0"
                    class="space-y-4">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Thursday 19</h3>

                    <p class="italic">Arrival at the Hotel</p>

                    <a href="https://maps.app.goo.gl/peYMfGTP1ZJKq9Ty5" class="group block">
                        <div class="w-full py-2 px-4 border rounded-lg group flex gap-1 items-center justify-around">
                            <img src="https://ik.imgkit.net/3vlqs5axxjf/external/https://media.iceportal.com/39419/photos/7296286_XL.jpg?tr=w-1200%2Cfo-auto"
                                alt="Zanhotel Europa"
                                class="h-16 w-16 object-cover rounded-2xl shadow-xl border border-gray-100">
                            <div>

                                <p class="font-semibold group-hover:underline text-lg">Zanhotel Europa</p>
                                <p class="text-slate-700">Via Cesare Boldrini, 11</p>
                            </div>
                            <x-heroicon-o-arrow-right class="w-6 h-6 mb-1 text-slate-700" />
                        </div>
                    </a>

                    <p class="font-semibold">Check-in: 15:00</p>

                    <p class="font-semibold">Official start: 20:00</p>

                    <p class="italic">Restaurant coming soon</p>

                </div>

                <div x-show="activeDay === 'Fri'" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 blur-sm" x-transition:enter-end="opacity-100 blur-0"
                    class="space-y-4">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Friday 20</h3>

                    <p class="italic">Arrival at the Hotel</p>

                    <a href="https://maps.app.goo.gl/peYMfGTP1ZJKq9Ty5" class="group block">
                        <div class="w-full py-2 px-4 border rounded-lg group flex gap-1 items-center justify-around">
                            <img src="https://ik.imgkit.net/3vlqs5axxjf/external/https://media.iceportal.com/39419/photos/7296286_XL.jpg?tr=w-1200%2Cfo-auto"
                                alt="Zanhotel Europa"
                                class="h-16 w-16 object-cover rounded-2xl shadow-xl border border-gray-100">
                            <div>

                                <p class="font-semibold group-hover:underline text-lg">Zanhotel Europa</p>
                                <p class="text-slate-700">Via Cesare Boldrini, 11</p>
                            </div>
                            <x-heroicon-o-arrow-right class="w-6 h-6 mb-1 text-slate-700" />
                        </div>
                    </a>

                    <p class="font-semibold">Check-in: 15:00</p>

                    <p class="font-semibold">Official start: 13:00</p>

                    <p class="italic">Restaurant coming soon</p>
                </div>


                <div x-show="activeDay === 'Sat'" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 blur-sm" x-transition:enter-end="opacity-100 blur-0"
                    class="space-y-4">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Saturday 21 </h3>

                    <p class="font-semibold">Breakfast: <span class="font-normal">from</span> 07:00</p>

                    <p class="font-semibold">Meeting: 07:30</p>

                    <p class="font-semibold text-red-900">Departure: 7:40</p>


                    <p>Visit of the Parmigiano Reggiano factory, Acetaia, Lunch in the Farm.</p>

                    <hr class="mx-4 border-slate-300">

                    <p class="font-semibold">Check-in: 15:00</p>
                    <a href="https://maps.app.goo.gl/PnoMQtAUhXbf85q66" class="block group">
                        <div class="w-full py-2 px-4 border rounded-lg group flex gap-1 items-center justify-around">
                            <img src="https://lh3.googleusercontent.com/gps-proxy/ALd4DhHopx1K2IhJjbMwKudjDxQBWD-h-SV9wZMrQVfyYNk3y5Jt19LCqhVjF2VtMphiP_e8bYC0mlb9EF-E75FVUo7RLCAGyF9F3AXKu8CfIwxoksIFXNwjz11uhkuHjZkPi7dMBazwr_oepTRFpfYTuLXczwnpfieeay-Y7LvkXrk3ZpvBsemU0wjb=w203-h135-k-no"
                                alt="Hotel Central Park"
                                class="h-16 w-16 object-cover rounded-2xl shadow-xl border border-gray-100">
                            <div>

                                <p class="font-semibold group-hover:underline text-lg">Hotel Central Park</p>
                                <p class="text-slate-700">Viale Vittorio Veneto, 10</p>
                            </div>
                            <x-heroicon-o-arrow-right class="w-6 h-6 mb-1 text-slate-700" />
                        </div>
                    </a>

                    <p class="font-semibold">Dinner start: 20:00</p>

                    <a href="https://maps.app.goo.gl/22iVbww9fC5zVi5z5" class="group block">
                        <div class="w-full py-2 px-4 border rounded-lg group flex gap-1 items-center justify-around">
                            <img src="https://lh3.googleusercontent.com/gps-cs-s/AHVAwerIvQGtAwwtYfKVuL8DjlzUpmMllR2LEMruhqT_0SAd_yXzIvoRSMv-DBuczfMPFI_AdZ_Aow651N3xtWSaLnpr_cdkZ42dqXN6cTdASDxL-WTffrp-jeM9OltZkDedq-NM6ZTQBUbC9jQx=w203-h270-k-no"
                                alt="Osteria Francescana"
                                class="h-16 w-16 object-cover rounded-2xl shadow-xl border border-gray-100">
                            <div>

                                <p class="font-semibold group-hover:underline text-lg">Osteria Francescana</p>
                                <p class="text-slate-700">Via Stella 22, Modena</p>
                            </div>
                            <x-heroicon-o-arrow-right class="w-6 h-6 mb-1 text-slate-700" />
                        </div>
                    </a>


                </div>

                <div x-show="activeDay === 'Sun'" x-cloak x-transition:enter="transition ease-out duration-400"
                    class="space-y-4" x-transition:enter-start="opacity-0 blur-sm"
                    x-transition:enter-end="opacity-100 blur-0">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Sunday 22</h3>

                    <p>Visit of Modena</p>

                    <p class="font-semibold">Lunch at 12:30</p>

                    <p class="italic">Coming soon</p>
                </div>

            </div>
        </div>
    </article>
