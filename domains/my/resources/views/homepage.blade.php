@extends('azzarip::layouts.1col')

@section('main')
<div class="grid mx-4 lg:grid-cols-2">
    <div>
        <p class="mt-4 ml-8 text-2xl font-semibold font-head">@lang('Hi') {{ auth()->user()->first_name }}!</p>
        <hr class="w-1/2 my-2">
        <div class="grid grid-cols-2 px-4 py-4 rounded-lg">
            <div>
                <p>Your level is:</p>
                <p class="my-2 text-3xl font-semibold font-head">ROOKIE</p>
                <p>Join one event to become Explorer!</p>
            </div>
            <div>
                <p>You currently have:</p>
                <p class="my-2 text-3xl font-semibold font-head">0 points</p>
                <a class="block text-right underline max-lg:mt-12" href="/achievements">See Achievements</a>
            </div>
        </div>
    </div>
    
</div>

@endsection
