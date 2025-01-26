@extends('book::layouts.simple-event')

@section('second_column')
<div class="text-y">
    <h2 class="text-2xl font-bold text-center lg:text-3xl font-trajan">This Event Has Ended</h2>
    <p>Thank you for your interest in this event!</p>
    <p>Unfortunately, this event has already taken place.</p>
    <p class="pb-4">Don't worry, though—there are plenty of exciting upcoming events to explore!</p>
    @auth
    <x-button :link="durl('/events', 'my')">
        Check the upcoming events!
    </x-button>
    @endauth

    @guest
    <x-button :link="route('register')">
        Become a Food Explorer!
    </x-button>
    @endguest


</div>
@endsection