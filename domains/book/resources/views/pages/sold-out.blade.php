@extends('book::layouts.simple-event')

@section('second_column')
<div class="mt-4 text-y">
    <h2 class="text-3xl font-bold text-center lg:text-4xl font-trajan">This Event is <br>
    <p class="text-4xl font-semibold text-red-900 lg:text-5xl">SOLD-OUT</p></h2>
    
    <p>Thank you for your interest in this event!</p>
        
    <p>Unfortunately, this event is already <strong>sold-out</strong>.</p>

    <p class="pb-4">You will be informed if any of the spots gets free.</p>
    
    @auth
    <x-button :link="durl('/events', 'my')">
        Check other upcoming events!
    </x-button>
    @endauth


</div>
@endsection