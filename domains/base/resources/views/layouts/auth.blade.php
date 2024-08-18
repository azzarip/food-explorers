@extends('azzarip::layouts.1col', ['bg' => 'bg-background'])

@section('main')
    <div class="max-w-3xl mx-auto bg-white border-green-600 rounded-2xl border-y-8">
        <div class="max-w-lg px-2 mx-auto mt-2">
            @yield('content')
        </div>
    </div>
@endsection
