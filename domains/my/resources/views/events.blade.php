@extends('layouts.1col')

@section('main')
    <div class="mt-4">
        <h1 class="my-2 text-3xl text-center">Events</h1>
        <h2 class="text-xl text-center">Your Event Participation</h2>
        <section class="wrapper">
            <h3 class="font-medium ">Upcoming Events:</h3>
            <p class="italic text-center text-gray-500">No upcoming events booked.</p>
        </section>

        <section class="wrapper">
            <h3 class="mb-2 font-medium">Past Events:</h3>
            @php($pastEvents = auth()->user()->pastEvents)
            <div class="flex flex-col gap-y-4">
                @foreach ($pastEvents as $event)
                    <div class="px-4 py-2 border rounded-lg">
                        <h4 class="font-semibold">{{ $event->title }}</h4>
                        <time datetime="{{ $event->scheduled_at->format('Y-m-d H:i') }}"
                            class="text-base text-gray-500">{{ $event->scheduled_at->format('j F Y') }}</time>
                    </div>
                @endforeach
        </section>
    </div>
    </div>
@endsection
