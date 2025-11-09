@extends('book::layouts.simple-event')

@php 
$myUrl = durl('/', 'my')->url();
$offer = \App\Models\Offer::findSlug($offer);
$event = $offer->eventWithData;
@endphp 

@section('second_column')
<div class="space-y-3">
    <h2 class="text-2xl font-bold text-center lg:text-3xl font-trajan">
    <x-heroicon-s-check-circle class="inline w-10 h-10 mb-1 text-green-800" /> Confirmed</h2>
    
    <p>You have reserved your spot!</p>
    <p>Soon you will receive an email with the confirmation.</p>


    <p>Add this event to your calendar:</p>

    <div class="pb-2 mx-auto w-fit">
    <a 
    href="https://www.google.com/calendar/render?action=TEMPLATE&text={{ urlencode($event->title) }}&dates={{ $event->scheduled_at->setTimezone('UTC')->format('Ymd\THis\Z') }}/{{ $event->finished_at->setTimezone('UTC')->format('Ymd\THis\Z') }}&details={{ urlencode("Event organized by Food Explorers. Access your private area here: $myUrl") }}&location={{ urlencode($event->location->address) }}"
    target="_blank" rel="noopener noreferrer"
    class="flex items-center px-2 text-center border rounded-sm align-center w-fit hover:bg-slate-200"
    >
    <img border="0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Calendar_icon_%282020%29.svg/1200px-Google_Calendar_icon_%282020%29.svg.png" 
    class="w-12 h-12 p-2 mx-auto "> 
    <span class="font-serif font-semibold">Add to Google Calendar</span> 
    </a>
</div>
</div>
<hr class="w-4/5 mx-auto my-4">
<div class="mt-4">
@auth
<x-button :link="$myUrl">Visit your Private Area</x-button>
@else
@php($contact = Auth::guard('soft')->user())
<h1 class="mb-2 text-3xl leading-normal text-center text-black">Finish your account!</span></h1>

<x-forms::base :action="route('password')" button="Complete the account!">
    @csrf
    <div class="space-y-4">
        @error('user')
        <p class="px-2 py-1 text-black rounded-xl" style="background-color: #fca5a5;"><x-heroicon-o-exclamation-triangle
            style="display: inline; width: 24px; height: 24px;" />
            @lang("teavel::auth.$message")</p>
        @enderror

        <x-forms::field.email :email="$contact->email" />

        <x-forms::field.password new=true />

</x-forms::base >
</div>
@endauth
@endsection