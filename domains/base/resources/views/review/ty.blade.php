@extends('azzarip::layouts.1col', ['nav' => false])

@section('main')
<section class="flex flex-col items-center justify-center max-w-lg min-h-screen mx-auto">
    <div class="p-4 border rounded-lg shadow-md">
        <x-heroicon-s-check-circle class="w-10 h-10 mx-auto mb-1 text-green-800" />
    <h1 class="my-4 text-2xl text-center">Thank you very much!</h1>
    <p>Your feedback will be extremely valuable for improving our events!</p>
    </div>

    <x-button :link="durl('/', 'my')" >
        Visit the private area
    </x-button>
</section>
