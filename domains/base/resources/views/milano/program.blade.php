@extends('azzarip::layouts.base', ['bg' => 'bg-slate-50', 'nav' => false])

@php
    $seo = new SEO(
        title: 'Marvelous Milano 2026',
        description: 'Milano 16-19 April 2026. Full Itinerary by Food Explorers.',
        robots: 'noindex, nofollow',
    );

    $day = \Carbon\Carbon::parse('2026-04-16')->isPast() ? now()->format('D') : 'Thu';

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
                        class="flex-1 py-3 cursor-pointer px-2 rounded-md font-semibold transition-all duration-300 uppercase tracking-tighter text-xs"
                        x-text="day">
                    </button>
                </template>
            </div>

            <div class="relative min-h-[200px]">

                <div x-show="activeDay === 'Thu'" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 blur-sm" x-transition:enter-end="opacity-100 blur-0"
                    class="space-y-4">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Thursday 16</h3>

                    <p class="italic">Hotel for "Thursday" people</p>

                    <x-program-card
                        url="https://maps.app.goo.gl/Hgsstui6uS1vkNVx8"
                        image="https://www.hotelwindsormilan.com/wp-content/uploads/2021/05/Esterni-04.jpeg"
                        name="Hotel Windsor"
                        address="V. Galileo Galilei, 2"
                    />

                    <p class="font-semibold">Check-in from 15:00</p>

                    <p class="font-semibold">Dinner start: 19:00</p>

                    <x-program-card
                        url="https://maps.app.goo.gl/icaQz6jDiy47vsgn7"
                        image="https://www.finedininglovers.it/sites/default/files/styles/1_1_920x920/public/places/iyo-omakase-chijguaxw97hhkcry-ooksetseq-0.png.webp?itok=qMPRlI7u"
                        name="IYO Omakase"
                        address="Piazza Alvar Aalto, 9N02"
                    />

                </div>

                <div x-show="activeDay === 'Fri'" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 blur-sm" x-transition:enter-end="opacity-100 blur-0"
                    class="space-y-4">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Friday 17</h3>

                    <p class="italic">Hotel for "Friday" people</p>

                    <x-program-card
                        url="https://maps.app.goo.gl/Du7qkw5Xj9tUGmoY8"
                        image="https://cf.bstatic.com/xdata/images/hotel/max1024x768/304037259.jpg?k=26516aa364ad1203852e0f3ab1ab7dffdf43ac69e99bb8bb321bd3e18b028ff3&o="
                        name="Hotel Heart"
                        address="Piazzale Clotilde 10"
                        />
                    <p class="font-semibold">Check-in from 15:00</p>



                    <p class="font-semibold">Lunch: 13:00</p>
                    <x-program-card
                    url="https://maps.app.goo.gl/z2igkoHKiF7usAXR8"
                    image="https://www.ratana.it/wp-content/uploads/2024/04/Ratana_dehor_01-scaled-e1713873866899-1024x1024.jpg"
                    name="Ratanà"
                    address="Via de Castilla 28"
                    />

                    <p class="font-semibold">Dinner: from 20:00</p>
                    <x-program-card
                    url="https://maps.app.goo.gl/DBwaCD1XbUGxe8Nh8"
                    image="https://cdn.prod.website-files.com/60b371dc54ce160c4aeb3d6d/6613ae3571cd136803969079_2021-12-12-Langosteria---Shootin-Olev-7.webp"
                    name="Langosteria"
                    address="Via Savona 10"
                    />

                </div>


                <div x-show="activeDay === 'Sat'" x-transition:enter="transition ease-out duration-400"
                    x-transition:enter-start="opacity-0 blur-sm" x-transition:enter-end="opacity-100 blur-0"
                    class="space-y-4">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Saturday 18 </h3>

                    <p class="font-semibold">Lunch: 13:00</p>
                    <x-program-card
                    url="https://maps.app.goo.gl/qaXwJGYChghCAaMr7"
                    image="https://www.identitagolose.it/public/images/xmedium/4-nino-02-07-25-savour-duo-13.jpg"
                    name="Nino Osteria"
                    address="Via Bixio 47"
                    />

                    <p class="font-semibold">Dinner: from 20:00</p>
                    <x-program-card
                    url="https://maps.app.goo.gl/8ywbgWrfM7qBjf2V6"
                    image="https://lh3.googleusercontent.com/p/AF1QipMZUDdgxw47OkETP9g5-xkJdEbB6BGypdXr6WzK=s805-k-no"
                    name="Pirncipe Bar"
                    address="Piazza della Repubblica 17, Inside the Hotel Principe"
                    />
                </div>

                <div x-show="activeDay === 'Sun'" x-cloak x-transition:enter="transition ease-out duration-400"
                    class="space-y-4" x-transition:enter-start="opacity-0 blur-sm"
                    x-transition:enter-end="opacity-100 blur-0">
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Sunday 19</h3>

                    <p class="font-semibold">Lunch: 13:00</p>
                    <x-program-card
                    url="https://maps.app.goo.gl/FnW8MDQNe4x5Mowj6"
                    image="https://lh3.googleusercontent.com/gps-cs-s/APNQkAGXdbchXoTUfoIlNBsNY66918NJFoKBv0mz9ma97cl_-8GcFrIHXLatfvseBT_e5HdPpK1zC32XGaAcjWzI3aEMP-FCx8aMygZzjUX9_DSdnUzc8G3-zjUzzLQ1qPrnvEzjvRyOrNLpMsc=w408-h288-k-no"
                    name="Bentoteca"
                    address="Via Calocero 3"
                    />

                    <p class="font-semibold">Approximate finish 15:30-16:00</p>

                </div>

            </div>
        </div>
    </article>
