@extends('azzarip::layouts.base', ['nav' => true, 'bg' => 'bg-gradient-to-b from-rose-50 to-white antialiased'])

@php
    $seo = new SEO(title: $tasting->title, description: '', image: '', robots: 'noindex, nofollow');
@endphp

@section('body')
    <div class="flex w-full">
        <main class="mb-12 max-w-2xl mx-auto w-full px-2 md:px-4 flex-shrink-0">
            <p class="text-slate-700 mt-2 mb-2 italic"><a href="/calendar"><x-heroicon-o-arrow-left
                        class="inline w-4 h-4 mb-1 mr-2" /> Back to Calendar</a></p>
            <h1 class="mt-4 text-3xl font-semibold text-center leading-tight text-gray-900 md:text-4xl space-y-3">
                {{ $tasting->title }}</h1>
            @if ($tasting->is_dinner)
                <p
                    class="mt-2 p-1 border-2 border-yellow-600 rounded-lg text-center text-yellow-600 font-semibold w-fit mx-auto">
                    ⭐ Dinner Experience</p>
            @endif
            <div class="py-4 mt-4 w-full text-slate-700 space-y-4">
                <p class="pl-4"><strong class="text-rose-600 mb-2">Organizer:</strong> {{ $tasting->organizer->name }}</p>
                <div class="flex items-center pl-4">
                    <x-heroicon-s-map-pin class="inline w-6 h-6 mr-2 text-rose-500" />
                    <p>{{ $tasting->location->name }}, {{ $tasting->location->address }}</p>
                    <a href="{{ $tasting->location->google_maps_url }}" rel="noopener noreferrer nofollow" target="_blank"
                        class="ml-2 text-rose-600 font-medium hover:underline">
                        Maps
                    </a>
                </div>
                @foreach ($tasting->dates as $date)
                @php
                    $title = urlencode($tasting->title);
                    $startDateTime = $date->startAt()->setTimezone('UTC')->format('Ymd\THis\Z');
                    $endDateTime = $date->endAt()->setTimezone('UTC')->format('Ymd\THis\Z');
                    $location = urlencode($tasting->location->address);
                    $details = urlencode($tasting->title . ' - Wine Tasting at ' . $tasting->location->name . ', ' . $tasting->location->address);
                    $googleCalendarUrl = "https://www.google.com/calendar/render?action=TEMPLATE&text={$title}&dates={$startDateTime}/{$endDateTime}&details={$details}&location={$location}&sf=true&output=xml";
                @endphp

                    <div
                        class="flex flex-col md:flex-row md:justify-between md:items-center gap-2 md:gap-4 text-sm md:text-base p-4 bg-white rounded-lg shadow">
                        <div class="flex gap-1">
                            <x-heroicon-s-calendar-days class="inline w-6 h-6 mr-2 text-rose-500" />
                            <span>{{ $date->date->format('j F Y, l') }}</span>
                        </div>
                        <div class="flex gap-1">
                            <x-heroicon-o-clock class="inline w-6 h-6 mr-2 text-rose-500" />
                            <span>{{ $date->startAt()->format('H:i') }} – {{ $date->endAt()->format('H:i') }}</span>
                        </div>
                        <a class="flex items-center gap-1 cursor-pointer text-blue-600 hover:text-blue-800 p-1 border rounded-xl" href="{{ $googleCalendarUrl }}" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Google_Calendar_icon_%282020%29.svg" alt="Google Calendar" class="w-6 h-6">
                        </a>


                    </div>
                @endforeach
            </div>



            <section class="mt-2 lg:mt-6" id="event-description">
                <p><strong class="text-rose-600 mb-2 pl-4">Event Description:</strong></p>
                @if ($description)
                    {!! $description !!}
                @else
                    <p class="text-2xl text-slate-700 text-center mt-8 italic">No available event description...</p>
                @endif
            </section>

            <section class="mt-6 lg:mt-12">
                <hr class="w-3/4 border-slate-700 mx-auto">
                <div class="mx-auto  max-w-2xl rounded-2xl bg-white p-4 shadow-lg ring-1 ring-gray-100 sm:p-4"
                    id="form">
                    <p class="text-xl lg:text-3xl font-bold mb-2 text-center">Join the Zurich Wine Compass!</p>
                    <p class="text-center lg:text-xl">Never miss a Wine Tasting in Zurich again.</p>
                    <x-forms::base class="mx-auto max-w-lg" action="/" name="newsletter-form" id="newsletter-form">
                        <x-forms::field.email />
                        <div class="space-y-4 ml-2">
                            <x-forms::field.privacy_policy />
                            <div style="padding-top: 4px;">
                                <div class="inline-flex items-start">
                                    <input type="checkbox" name="age" id="age" class="w-4 h-4 mt-1" required>
                                    <label for="age" class="ml-2">I am 18 years old or older.</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full rounded-xl bg-rose-600 px-6 py-3 text-base cursor-pointer font-semibold text-white shadow-md transition hover:bg-rose-700 focus:outline-none focus:ring-4 focus:ring-rose-200">
                            Yes, I want to be informed about wine tastings in Zurich!
                        </button>
                    </x-forms::base>

                    <p
                        class="mt-4 w-fit mx-auto items-center gap-2 rounded-full border border-rose-200 bg-white/70 px-3 py-1 text-xs font-medium text-rose-700 shadow-sm backdrop-blur">
                        🍷 Curated weekly · Cancel anytime
                    </p>
                </div>
            </section>
        </main>
    </div>
@endsection
