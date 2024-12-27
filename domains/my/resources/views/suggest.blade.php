@extends('azzarip::layouts.1col')

@section('main')
<h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">Suggest an Event</h1>
<p class="mt-2 text-center">In this page, you can suggest a restaurant, bar, location or any other related event.</p>
<p class="mt-2 text-center">When this event is organized, you'll be the first to know and get added before anyone else!</p>
@if(cache('suggest.' . auth()->user()->id))
<div class="max-w-md py-3 mx-auto my-8 text-center border rounded-lg text-y">
    <p class="font-semibold">Thank you for your suggestion</p>
    <p class="italic">You can suggest an event per day only!</p>
</div>
@else
<div class="max-w-md mx-auto mb-8">
    <x-forms::base button="Suggest">
        <textarea name="text" id="text" rows="10" class="w-full p-1 mx-auto mt-4 border rounded-lg" required
        placeholder="Type here..."></textarea>
    </x-forms::base>
    
    <p class="mt-2"><strong>Tip:</strong> Add the Google Maps or website link, so it is easier to find.</p>
    <p class="text-center">One submission per day only!</p>
</div>
@endif

@endsection