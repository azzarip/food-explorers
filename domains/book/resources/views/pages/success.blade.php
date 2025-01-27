@extends('book::layouts.simple-event')

@php($myUrl = durl('/', 'my')->url())

@section('second_column')
<div class="text-y">
    <h2 class="text-2xl font-bold text-center lg:text-3xl font-trajan">
        <x-heroicon-o-check-circle class="inline w-10 h-10 mb-1 text-green-800" /> Confirmed</h2>
    
    <p>Thank you for <strong>reserving</strong> your spot! Soon you will receive an email with the confirmation.</p>

    <p>Add this event to your calendar:</p>

    <div class="pb-2">
    <a 
    href="https://www.google.com/calendar/render?action=TEMPLATE&text={{ urlencode($event->title) }}&dates={{ $event->scheduled_at->format('Ymd\THis\Z') }}/{{ $event->finished_at->format('Ymd\THis\Z') }}&details={{ urlencode("Event organized by Food Explorers. Access your private area here: $myUrl") }}&location={{ urlencode($event->location->address) }}"
    target="_blank"
    class="text-center w-fit"
>
    <img border="0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Calendar_icon_%282020%29.svg/1200px-Google_Calendar_icon_%282020%29.svg.png" 
    class="block w-12 h-12 p-2 mx-auto border rounded hover:bg-slate-200">
    </a>
</div>
<hr class="w-4/5 mx-auto my-4">
<div class="mt-4">
<x-button :link="$myUrl">Visit your Private Area</x-button>
</div>
    @if($event->going >= 1)
    <p>Here is a list of the other participants:</p>
    <div>
    @foreach ($event->participants as $participant)
    <div>
        <p>{{ $participant->display_name }}</p>    
    </div>        
    @endforeach
    </div>
    @endif
</div>
@endsection