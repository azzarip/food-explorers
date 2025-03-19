@extends('azzarip::layouts.1col')

@section('main')
    <article class="mb-10 wrapper">
        <h1 class="mt-4 font-serif text-2xl font-semibold lg:text-3xl">{{ $event->title }} @ {{ $location->name }}</h1>
        <div class="max-w-lg p-1 mx-4 my-4 space-y-4 lg:p-4 border-y">
            <p>
                <x-heroicon-o-clock class="inline w-6 h-6 mr-4 text-gray-400" />
                <span class="mb-2 font-serif text-sm">{{ $event->scheduled_at->translatedFormat('l, F j, Y g:i A') }}</span>
            </p>

            <p class="">
                <x-heroicon-o-map-pin class="inline w-6 h-6 mr-4 text-gray-400" />
                <span class="mb-2 font-serif text-sm"><a href="{{ $location->google_maps_url }}">{{ $location->name }},
                        {{ $location->address }} (<span class="hover:bg-slate-100"><span class="underline">Maps</span>
                            <x-heroicon-o-arrow-top-right-on-square class="inline w-4 h-4 mb-1" /></span> )</a> </span>
            </p>

            <p class="">
                <x-heroicon-o-users class="inline w-6 h-6 mr-4 text-gray-400" />
                <span class="mb-2 font-serif text-sm">{{ $currentParticipants }} / {{ $event->capacity }}</span>
            </p>
        </div>

        <img src="{{ $eventPage->image }}" alt="{{ $event->title }} Banner" class="w-full max-w-3xl mx-auto max-h-96">
        <h2 class="mt-4 font-serif text-xl font-semibold">
            Details
        </h2>
        <div class="px-2 py-4 text-y article">
            {!! Str::markdown($eventPage->description) !!}
        </div>

        <h2 class="mt-4 font-serif text-xl font-semibold">
            Participants ({{ $currentParticipants }} / {{ $event->capacity }})
        </h2>
        @guest
            <p class="mt-8 italic text-center">The participants' names will be displayed after you <a href="/login"
                    class="inline-link">login</a> or <a href="/register" class="inline-link">register</a>.</p>
            <hr class="my-8">
            <div class="max-w-sm mx-auto">
                <x-button link="/register">Join the Event</x-button>
            </div>
        @endguest
        @auth
            <div class="px-2">
                @foreach ($event->participants as $participant)
                    <div class="py-2 mt-2">
                        <p
                            class="w-full p-2 pl-4 font-serif font-semibold border rounded-sm shadow-md @if ($participant->id == auth()->user()->id) bg-yellow-50 @endif">
                            {{ $participant->first_name }}
                            @if ($participant->id == auth()->user()->id)
                                <span>(You)</span> <span
                                    class="float-right pt-1 pr-1 font-sans text-sm font-normal text-red-800 hover:cursor-pointer hover:underline"
                                    x-data="" @click="$dispatch('cancel');"><x-heroicon-o-x-mark
                                        class="inline w-4 h-4 mb-1 text-red-800" /> Cancel</span>
                            @endif
                        </p>
                    </div>
                @endforeach
                <hr class="my-8">

                <div class="max-w-sm mx-auto">

                    @if ($userParticipation?->queue)
                        <button x-data=''
                            class="block w-full p-2 pt-3 font-semibold text-center border border-black rounded-md cursor-pointer hover:bg-black hover:text-white"
                            type="submit" @click="$dispatch('cancel');">
                            <x-heroicon-o-clock class="inline w-6 h-6 mb-1" />
                            You are in the queue</button>
                    @elseif($userParticipation)
                        <button x-data=''
                            class="block w-full p-2 pt-3 font-semibold text-center bg-green-200 border border-black rounded-md cursor-pointer hover:bg-black hover:text-white"
                            type="submit" @click="$dispatch('cancel');">
                            <x-heroicon-s-check-circle class="inline w-6 h-6 mb-1 text-green-900" />
                            Attending</button>
                    @elseif($currentParticipants < $event->capacity)
                        <x-forms::base button="Reserve your place" :action="route('participation.add', ['event' => $event->id])" />
                    @else
                        <x-forms::base button="Join the Queue" :action="route('participation.add', ['event' => $event->id])" />
                    @endif
                </div>
                <hr class="my-8">
            </div>
        @endauth
    </article>
@endsection

<x-modals.cancelParticipation :event_id="$event->id" />
