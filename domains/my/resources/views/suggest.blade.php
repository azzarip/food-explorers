@extends('azzarip::layouts.1col')

@section('main')
<div class="max-w-lg mx-auto mb-4 text-y">
<h1 class="mt-4 text-2xl font-semibold text-center lg:text-4xl lg:mt-12">Suggest an Event</h1>
@if(auth()->user()->getPoints() >= 1)
<p class="">In this page, you can suggest a restaurant, bar, location or any other related event.</p>
<p class="">When this event is organized, you'll be the first to know and get added <strong>before anyone else</strong>.</p>
<p>You can submit <strong> a suggestion per day</strong>.</p>
</div>
@if(cache('suggest.' . auth()->user()->id))
<div class="max-w-md py-3 mx-auto my-8 text-center border rounded-lg text-y">
    <p class="font-semibold">Thank you for your suggestion</p>
    <p class="italic">You can suggest another event tomorrow!</p>
</div>
@else
<div class="max-w-md p-4 mx-auto mt-2 mb-8 border rounded-lg">
    <x-forms::base button="Suggest">
        <div>
            <label for="event-type">What type of Event?</label>
            <select id="event-type" name="event_type" class="p-1 ml-2 border-2 border-black rounded-lg">
                <option value="restaurant">Restaurant</option>
                <option value="bar">Bar</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div>
            <label for="name" class="block">Name:</label>
            <input type="text" class="input-text" name="name" placeholder="" required>
        </div>
        <div>
            <label for="url" class="block">URL of the website or Google Maps:</label>
            <input type="text" class="input-text" name="url" placeholder="https://...">
        </div>
        <div>
            <label for="text" class="block">Why should we go there?</label>
            <textarea name="text" id="text" rows="4" class="w-full p-1 mx-auto border rounded-lg"
            placeholder="Type here..."></textarea>            
        </div>
    </x-forms::base>
</div>
@endif
@else
<p>You can start suggesting restaurants and events once you’ve attended one of ours!</p>
<p>Join a future event to <strong>unlock this feature</strong> and share your ideas with the community!</p>
<a href="/events" class="block w-4/5 max-w-md mx-auto text-center std-button">Check upcoming events!</a>
@endif
@endsection