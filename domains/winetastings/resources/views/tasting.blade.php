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
            <p class="text-slate-700 italic text-center">organized by {{ $tasting->organizer->name }}</p>
            <div class="py-4 mt-4 w-full text-slate-700 space-y-4">
                <div class="flex items-center pl-2 lg:pl-4">
                    <x-heroicon-s-map-pin class="inline w-6 h-6 mr-2 text-rose-500" />
                    <p>{{ $tasting->location->name }}, {{ $tasting->location->address }}</p>
                    <a href="{{ $tasting->location->google_maps_url }}" rel="noopener noreferrer nofollow" target="_blank"
                        class="ml-2 text-rose-600 font-medium hover:underline max-md:mr-2">
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
                        <div class="flex gap-1 md:w-1/2">
                            <x-heroicon-s-calendar-days class="inline w-6 h-6 mr-2 text-rose-500" />
                            <span>{{ $date->date->format('j F Y, l') }}</span>
                        </div>
                        <div class="flex gap-1 md:w-1/3">
                            <x-heroicon-o-clock class="w-6 h-6 mr-2 text-rose-500 shrink-0" />
                            <span class="whitespace-nowrap">{{ $date->startAt()->format('H:i') }} – {{ $date->endAt()->format('H:i') }}</span>
                        </div>
                        <a class="flex items-center w-fit self-end md:self-auto ml-auto md:ml-0  gap-1 cursor-pointer text-blue-600 hover:text-blue-800 p-1 border rounded-xl" href="{{ $googleCalendarUrl }}" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Google_Calendar_icon_%282020%29.svg" alt="Google Calendar" class="w-6 h-6">
                            <span class="md:hidden"> Google Calendar </span>
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

         <x-winetastings::newsletter-form />
        </main>
    </div>
@endsection
