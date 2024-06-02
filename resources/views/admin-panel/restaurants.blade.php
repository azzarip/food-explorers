@extends('azzarip::dashboard')

@section('panel')
<div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-2 lg:gap-8 lg:p-8">
    <div class="">
    <a href="/meetups" class="flex rounded-lg shadow-lg shadow-gray-700 hover:shadow-gray-500">
        <div class="flex items-center justify-center w-full text-center text-white rounded-l-lg bg-amber-900 border-amber-900 border-y-2 ">
            <p class="text-4xl">Meetups</p>
        </div>
        <div class="flex items-center justify-center w-24 border-r-2 rounded-r-lg border-amber-900 border-y-2 ">
            <x-heroicon-o-user-group  class="w-16 h-16 mx-auto my-2 text-amber-800" />
        </div>
    </a>
    </div>


</div>

@endsection
