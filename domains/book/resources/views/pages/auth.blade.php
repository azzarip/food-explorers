@extends('book::layouts.simple-event')

@section('second_column')
<div class="max-w-sm mx-auto">
    @if($event->isSoldOut)
    <div class="my-2">
    <h2 class="text-2xl font-bold text-center lg:text-3xl font-trajan">This Event is <br>
    <p class="text-3xl font-semibold text-red-900 lg:text-4xl">SOLD-OUT</p></h2>
    </div>
    <hr class="w-4/5 mx-auto my-2">
    @endif

    @if (request()->query('v') == 'login')
        @if($event->isSoldOut)
            <h2 class="text-xl font-bold text-center lg:text-2xl font-trajan">Join the waitlist</h2>
        @else
            <h2 class="text-xl font-bold text-center lg:text-2xl font-trajan">Log in to complete your reservation</h2>
        @endif
        
        <x-book::auth.login />
    @else
        @if($event->isSoldOut)
            <h2 class="text-xl font-bold text-center lg:text-2xl font-trajan">Join the waitlist</h2>
        @else
            <h2 class="text-xl font-bold text-center lg:text-2xl font-trajan">Register to complete your reservation</h2>
        @endif

        <x-book::auth.register />
    @endif
</div>
@endsection